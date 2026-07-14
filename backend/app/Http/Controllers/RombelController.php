<?php
// app/Http/Controllers/RombelController.php

namespace App\Http\Controllers;

use App\Models\Rombel;
use App\Models\Mapel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class RombelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            Log::info('=== ROMBEL INDEX START ===');
            Log::info('Request IP: ' . $request->ip());
            
            // Test database connection
            $dbTest = \DB::select('SELECT 1 as test');
            Log::info('Database test:', ['db_test' => $dbTest]);
            
            // Load rombels dengan user dan mapels
            $rombels = Rombel::with(['user:id,name,email,wali_kelas', 'mapels'])
                ->orderBy('tingkat', 'asc')
                ->orderBy('nama_kelas', 'asc')
                ->get();
            
            Log::info('Rombels fetched:', [
                'count' => $rombels->count()
            ]);
            
            $response = [
                'success' => true,
                'message' => 'Data kelas berhasil diambil',
                'data' => $rombels,
                'count' => $rombels->count(),
                'debug' => [
                    'database' => 'connected',
                    'timestamp' => now()->toDateTimeString()
                ]
            ];
            
            Log::info('=== ROMBEL INDEX END ===');
            
            return response()->json($response);
            
        } catch (\Exception $e) {
            Log::error('ERROR in rombel index:', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return response()->json([
                'success' => false,
                'error' => 'Gagal memuat data kelas',
                'debug' => [
                    'message' => $e->getMessage(),
                    'file' => $e->getFile(),
                    'line' => $e->getLine()
                ]
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Log::info('Creating rombel:', $request->all());
            
            $validated = $request->validate([
                'wali_kelas' => 'required|string|max:255',
                'nama_kelas' => 'required|string|max:255',
                'jurusan' => 'nullable|string|max:255',
                'tingkat' => 'nullable|string|max:10',
                'user_id' => 'nullable|exists:users,id',
                'mapel_ids' => 'nullable|array',
                'mapel_ids.*' => 'exists:mapels,id'
            ]);

            // Validasi user jika user_id diberikan
            if (isset($validated['user_id'])) {
                $user = User::find($validated['user_id']);
                if (!$user || $user->role !== 'guru') {
                    return response()->json([
                        'success' => false,
                        'error' => 'User yang dipilih harus memiliki role guru'
                    ], 422);
                }
            } else {
                // Cari user berdasarkan nama wali_kelas
                $user = User::where('name', $validated['wali_kelas'])
                    ->where('role', 'guru')
                    ->first();
                
                if ($user) {
                    $validated['user_id'] = $user->id;
                }
            }

            if (empty($validated['tingkat'])) {
                $validated['tingkat'] = $this->extractTingkatFromNamaKelas($validated['nama_kelas']);
            }

            // Mulai transaksi database
            DB::beginTransaction();

            // Buat rombel
            $rombel = Rombel::create([
                'wali_kelas' => $validated['wali_kelas'],
                'nama_kelas' => $validated['nama_kelas'],
                'jurusan' => $validated['jurusan'],
                'tingkat' => $validated['tingkat'],
                'user_id' => $validated['user_id'] ?? null
            ]);

            // Update wali_kelas di users jika user_id ada
            if ($rombel->user_id) {
                $user = User::find($rombel->user_id);
                if ($user && !$user->wali_kelas) {
                    $user->update(['wali_kelas' => $rombel->nama_kelas]);
                }
            }

            // Sync mapel jika ada
            if (isset($validated['mapel_ids']) && !empty($validated['mapel_ids'])) {
                $rombel->mapels()->sync($validated['mapel_ids']);
            }

            DB::commit();

            // Load user dan mapels untuk response
            $rombel->load(['user:id,name,email,wali_kelas', 'mapels']);

            return response()->json([
                'success' => true,
                'message' => 'Kelas berhasil ditambahkan',
                'data' => $rombel
            ], 201);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'error' => 'Validasi gagal',
                'messages' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error creating rombel:', ['error' => $e->getMessage()]);
            
            return response()->json([
                'success' => false,
                'error' => 'Gagal menambahkan kelas',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            Log::info('Fetching rombel:', ['id' => $id]);
            
            $rombel = Rombel::with([
                'user:id,name,email,wali_kelas',
                'mapels', 
                'siswas' => function($query) {
                    $query->orderBy('nama', 'asc');
                }
            ])->find($id);
            
            if (!$rombel) {
                return response()->json([
                    'success' => false,
                    'error' => 'Kelas tidak ditemukan'
                ], 404);
            }

            // Get all mapels untuk form pemilihan
            $allMapels = Mapel::orderBy('nama_mapel')->get();

            return response()->json([
                'success' => true,
                'data' => $rombel,
                'all_mapels' => $allMapels,
                'selected_mapel_ids' => $rombel->mapels->pluck('id')->toArray()
            ]);
            
        } catch (\Exception $e) {
            Log::error('Error fetching rombel:', ['id' => $id, 'error' => $e->getMessage()]);
            
            return response()->json([
                'success' => false,
                'error' => 'Gagal memuat data kelas',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            Log::info('Updating rombel:', ['id' => $id, 'data' => $request->all()]);
            
            $rombel = Rombel::find($id);
            
            if (!$rombel) {
                return response()->json([
                    'success' => false,
                    'error' => 'Kelas tidak ditemukan'
                ], 404);
            }
            
            $validated = $request->validate([
                'wali_kelas' => 'required|string|max:255',
                'nama_kelas' => 'required|string|max:255|unique:rombels,nama_kelas,' . $id,
                'jurusan' => 'required|string|max:255',
                'tingkat' => 'nullable|string|max:10',
                'user_id' => 'nullable|exists:users,id',
                'mapel_ids' => 'nullable|array',
                'mapel_ids.*' => 'exists:mapels,id'
            ]);

            // Validasi user jika user_id diberikan
            if (isset($validated['user_id'])) {
                $user = User::find($validated['user_id']);
                if (!$user || $user->role !== 'guru') {
                    return response()->json([
                        'success' => false,
                        'error' => 'User yang dipilih harus memiliki role guru'
                    ], 422);
                }
            } else {
                // Cari user berdasarkan nama wali_kelas
                $user = User::where('name', $validated['wali_kelas'])
                    ->where('role', 'guru')
                    ->first();
                
                if ($user) {
                    $validated['user_id'] = $user->id;
                }
            }

            if (empty($validated['tingkat'])) {
                $validated['tingkat'] = $this->extractTingkatFromNamaKelas($validated['nama_kelas']);
            }

            // Mulai transaksi database
            DB::beginTransaction();

            // Update data rombel
            $oldUserWaliKelas = $rombel->wali_kelas;
            
            $rombel->update([
                'wali_kelas' => $validated['wali_kelas'],
                'nama_kelas' => $validated['nama_kelas'],
                'jurusan' => $validated['jurusan'],
                'tingkat' => $validated['tingkat'],
                'user_id' => $validated['user_id'] ?? null
            ]);

            // Update wali_kelas di users
            if ($rombel->user_id) {
                $user = User::find($rombel->user_id);
                if ($user) {
                    $user->update(['wali_kelas' => $rombel->nama_kelas]);
                }
            }

            // Sync mapel jika ada
            if (isset($validated['mapel_ids'])) {
                $rombel->syncMapels($validated['mapel_ids']);
            }

            DB::commit();

            // Load user dan mapels untuk response
            $rombel->load(['user:id,name,email,wali_kelas', 'mapels']);

            return response()->json([
                'success' => true,
                'message' => 'Data kelas berhasil diupdate',
                'data' => $rombel
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'error' => 'Validasi gagal',
                'messages' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error updating rombel:', ['id' => $id, 'error' => $e->getMessage()]);
            
            return response()->json([
                'success' => false,
                'error' => 'Gagal mengupdate kelas',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            Log::info('Deleting rombel:', ['id' => $id]);
            
            $rombel = Rombel::find($id);
            
            if (!$rombel) {
                return response()->json([
                    'success' => false,
                    'error' => 'Kelas tidak ditemukan'
                ], 404);
            }

            // Check if rombel has students
            if ($rombel->siswas()->exists()) {
                return response()->json([
                    'success' => false,
                    'error' => 'Tidak dapat menghapus kelas',
                    'message' => 'Kelas masih memiliki data siswa'
                ], 422);
            }

            // Hapus relasi mapel terlebih dahulu
            $rombel->mapels()->detach();
            
            // Reset wali_kelas di users jika ada
            if ($rombel->user_id) {
                $user = User::find($rombel->user_id);
                if ($user && $user->wali_kelas == $rombel->nama_kelas) {
                    $user->update(['wali_kelas' => null]);
                }
            }
            
            $rombel->delete();

            return response()->json([
                'success' => true,
                'message' => 'Kelas berhasil dihapus'
            ]);

        } catch (\Exception $e) {
            Log::error('Error deleting rombel:', ['id' => $id, 'error' => $e->getMessage()]);
            
            return response()->json([
                'success' => false,
                'error' => 'Gagal menghapus kelas',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Get all gurus for auto-complete
     */
    public function getGurus()
    {
        try {
            $gurus = User::where('role', 'guru')
                ->select('id', 'name', 'email', 'role', 'wali_kelas')
                ->orderBy('name')
                ->get();

            return response()->json([
                'success' => true,
                'data' => $gurus,
                'total' => $gurus->count()
            ]);
        } catch (\Exception $e) {
            Log::error('Error fetching gurus:', ['error' => $e->getMessage()]);
            
            return response()->json([
                'success' => false,
                'error' => 'Gagal mengambil data guru',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Get siswa by rombel
     */
    public function siswa($id)
    {
        try {
            $rombel = Rombel::with([
                'user:id,name,email,wali_kelas',
                'siswas' => function($query) {
                    $query->orderBy('nama', 'asc');
                }
            ])->find($id);
            
            if (!$rombel) {
                return response()->json([
                    'success' => false,
                    'error' => 'Kelas tidak ditemukan'
                ], 404);
            }

            return response()->json([
                'success' => true,
                'data' => $rombel->siswas,
                'rombel' => [
                    'id' => $rombel->id,
                    'nama_kelas' => $rombel->nama_kelas,
                    'jurusan' => $rombel->jurusan,
                    'tingkat' => $rombel->tingkat,
                    'wali_kelas' => $rombel->wali_kelas,
                    'user' => $rombel->user
                ],
                'count' => $rombel->siswas->count()
            ]);
            
        } catch (\Exception $e) {
            Log::error('Error fetching siswa:', ['id' => $id, 'error' => $e->getMessage()]);
            
            return response()->json([
                'success' => false,
                'error' => 'Gagal memuat data siswa',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Get summary by rombel
     */
    public function summary($id)
    {
        try {
            $rombel = Rombel::with([
                'user:id,name,email,wali_kelas',
                'mapels', 
                'siswas'
            ])->find($id);
            
            if (!$rombel) {
                return response()->json([
                    'success' => false,
                    'error' => 'Kelas tidak ditemukan'
                ], 404);
            }

            $totalSiswa = $rombel->siswas()->count();
            $siswaAktif = $rombel->siswas()->where('status', 'aktif')->count();
            $totalMapel = $rombel->mapels()->count();
            
            $summary = [
                'rombel' => [
                    'id' => $rombel->id,
                    'nama_kelas' => $rombel->nama_kelas,
                    'jurusan' => $rombel->jurusan,
                    'tingkat' => $rombel->tingkat,
                    'wali_kelas' => $rombel->wali_kelas,
                    'user' => $rombel->user,
                    'nama_kelas_lengkap' => $rombel->nama_kelas_lengkap
                ],
                'statistik' => [
                    'total_siswa' => $totalSiswa,
                    'siswa_aktif' => $siswaAktif,
                    'total_mapel' => $totalMapel,
                    'mapel_list' => $rombel->mapels->pluck('nama_mapel')->toArray()
                ]
            ];

            return response()->json([
                'success' => true,
                'data' => $summary
            ]);
            
        } catch (\Exception $e) {
            Log::error('Error fetching summary:', ['id' => $id, 'error' => $e->getMessage()]);
            
            return response()->json([
                'success' => false,
                'error' => 'Gagal memuat summary kelas',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Search rombels
     */
    public function search(Request $request)
    {
        try {
            $query = $request->get('query', '');
            
            Log::info('Searching rombels:', ['query' => $query]);
            
            $rombels = Rombel::with(['user:id,name,email,wali_kelas', 'mapels'])
                ->where('nama_kelas', 'like', "%{$query}%")
                ->orWhere('wali_kelas', 'like', "%{$query}%")
                ->orWhere('jurusan', 'like', "%{$query}%")
                ->orWhereHas('user', function ($q) use ($query) {
                    $q->where('name', 'like', "%{$query}%")
                      ->orWhere('email', 'like', "%{$query}%");
                })
                ->orderBy('tingkat', 'asc')
                ->orderBy('nama_kelas', 'asc')
                ->get();

            return response()->json([
                'success' => true,
                'data' => $rombels,
                'count' => $rombels->count()
            ]);
            
        } catch (\Exception $e) {
            Log::error('Error searching rombels:', ['query' => $query, 'error' => $e->getMessage()]);
            
            return response()->json([
                'success' => false,
                'error' => 'Gagal mencari data kelas',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Get rapor by rombel
     */
    public function rapor($id)
    {
        try {
            $rombel = Rombel::with('user:id,name,email,wali_kelas')->find($id);
            
            if (!$rombel) {
                return response()->json([
                    'success' => false,
                    'error' => 'Kelas tidak ditemukan'
                ], 404);
            }

            $rapors = [];
            if (method_exists($rombel, 'rapors')) {
                $rapors = $rombel->rapors()->with('siswa')->orderBy('created_at', 'desc')->get();
            }
            
            return response()->json([
                'success' => true,
                'data' => $rapors,
                'rombel' => $rombel
            ]);
            
        } catch (\Exception $e) {
            Log::error('Error fetching rapor:', ['id' => $id, 'error' => $e->getMessage()]);
            
            return response()->json([
                'success' => false,
                'error' => 'Gagal memuat data rapor',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Set mapels for rombel
     */
    public function setMapels(Request $request, $id)
    {
        try {
            $rombel = Rombel::with('user:id,name,email,wali_kelas')->find($id);
            
            if (!$rombel) {
                return response()->json([
                    'success' => false,
                    'error' => 'Kelas tidak ditemukan'
                ], 404);
            }

            $validated = $request->validate([
                'mapel_ids' => 'required|array',
                'mapel_ids.*' => 'exists:mapels,id'
            ]);

            DB::beginTransaction();

            $rombel->syncMapels($validated['mapel_ids']);

            DB::commit();

            // Load mapels untuk response
            $rombel->load('mapels');

            return response()->json([
                'success' => true,
                'message' => 'Mapel berhasil di-set untuk kelas',
                'data' => [
                    'rombel' => $rombel,
                    'mapel_aktif' => $rombel->mapel_aktif_detail,
                    'total_mapel' => $rombel->mapels->count()
                ]
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'error' => 'Validasi gagal',
                'messages' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error setting mapels:', ['id' => $id, 'error' => $e->getMessage()]);
            
            return response()->json([
                'success' => false,
                'error' => 'Gagal meng-set mapel',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Get mapels for rombel
     */
    public function getMapels($id)
    {
        try {
            $rombel = Rombel::with(['user:id,name,email,wali_kelas', 'mapels'])->find($id);
            
            if (!$rombel) {
                return response()->json([
                    'success' => false,
                    'error' => 'Kelas tidak ditemukan'
                ], 404);
            }

            $allMapels = Mapel::orderBy('nama_mapel')->get();
            $selectedIds = $rombel->mapels->pluck('id')->toArray();
            
            return response()->json([
                'success' => true,
                'data' => [
                    'rombel' => $rombel,
                    'mapels' => $allMapels,
                    'selected_ids' => $selectedIds,
                    'mapel_aktif' => $rombel->mapel_aktif_detail
                ]
            ]);
            
        } catch (\Exception $e) {
            Log::error('Error fetching mapels:', ['id' => $id, 'error' => $e->getMessage()]);
            
            return response()->json([
                'success' => false,
                'error' => 'Gagal memuat data mapel',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Extract tingkat from nama_kelas
     */
    private function extractTingkatFromNamaKelas($namaKelas)
    {
        if (preg_match('/(X|XI|XII)/', $namaKelas, $matches)) {
            return $matches[1];
        }
        return 'X';
    }
}