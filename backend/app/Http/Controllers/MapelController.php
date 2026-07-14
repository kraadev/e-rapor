<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Rombel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class MapelController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = Mapel::with(['gurus' => function($query) {
                $query->select('users.id', 'name', 'email', 'wali_kelas');
            }]);
            
            // Filter by fase jika ada
            if ($request->has('fase')) {
                $query->where('fase', $request->fase);
            }
            
            // Filter by search
            if ($request->has('search')) {
                $search = $request->search;
                $query->where(function($q) use ($search) {
                    $q->where('nama_mapel', 'like', "%{$search}%")
                      ->orWhere('kode_mapel', 'like', "%{$search}%")
                      ->orWhereHas('gurus', function($q2) use ($search) {
                          $q2->where('name', 'like', "%{$search}%")
                             ->orWhere('email', 'like', "%{$search}%");
                      });
                });
            }

            $mapels = $query->orderBy('nama_mapel')->get();

            // Tambahkan informasi tambahan
            $mapels = $mapels->map(function($mapel) {
                $mapel->total_rombels = $mapel->rombels()->count();
                $mapel->total_gurus = $mapel->gurus()->count();
                $mapel->kolom_nilai = 'nilai_' . strtolower($mapel->kode_mapel);
                $mapel->kolom_keterangan = 'keterangan_' . strtolower($mapel->kode_mapel);
                $mapel->nama_gurus = $mapel->gurus->pluck('name')->implode(', ');
                return $mapel;
            });

            return response()->json([
                'success' => true,
                'data' => $mapels,
                'count' => $mapels->count(),
                'fase_options' => ['Fase A', 'Fase B', 'Fase C', 'Fase D', 'Fase E', 'Fase F'],
                'statistics' => Mapel::getStatistics()
            ]);

        } catch (\Exception $e) {
            Log::error('Error fetching mapels:', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch mata pelajaran',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_mapel' => 'required|string|max:255|unique:mapels,nama_mapel',
            'kode_mapel' => 'required|string|max:10|unique:mapels,kode_mapel',
            'fase' => 'nullable|string|max:10',
            'guru_ids' => 'nullable|array',
            'guru_ids.*' => 'exists:users,id,role,guru'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            DB::beginTransaction();

            $mapel = Mapel::create([
                'nama_mapel' => $request->nama_mapel,
                'kode_mapel' => $request->kode_mapel,
                'fase' => $request->fase
            ]);

            // Attach gurus jika ada
            if ($request->has('guru_ids') && !empty($request->guru_ids)) {
                $mapel->gurus()->sync($request->guru_ids);
                $mapel->load('gurus');
            }

            // Tambahkan informasi tambahan
            $mapel->kolom_nilai = 'nilai_' . strtolower($mapel->kode_mapel);
            $mapel->kolom_keterangan = 'keterangan_' . strtolower($mapel->kode_mapel);
            $mapel->total_gurus = $mapel->gurus()->count();
            $mapel->nama_gurus = $mapel->gurus->pluck('name')->implode(', ');

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Mata pelajaran berhasil dibuat',
                'data' => $mapel
            ], 201);

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error creating mapel:', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Gagal membuat mata pelajaran',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function show(Mapel $mapel)
    {
        try {
            // Load relationships
            $mapel->load(['gurus' => function($query) {
                $query->select('users.id', 'name', 'email', 'wali_kelas');
            }, 'rombels']);
            
            // Tambahkan informasi tambahan
            $mapel->total_rombels = $mapel->rombels()->count();
            $mapel->total_gurus = $mapel->gurus()->count();
            $mapel->kolom_nilai = 'nilai_' . strtolower($mapel->kode_mapel);
            $mapel->kolom_keterangan = 'keterangan_' . strtolower($mapel->kode_mapel);
            $mapel->nama_gurus = $mapel->gurus->pluck('name')->implode(', ');
            
            // Get available gurus untuk dropdown
            $availableGurus = $mapel->getAllAvailableGurus();
            
            // Get rombels detail
            $rombels = $mapel->rombels()->withCount('siswas')->get();

            return response()->json([
                'success' => true,
                'data' => [
                    'mapel' => $mapel,
                    'rombels' => $rombels,
                    'total_rombels' => $mapel->total_rombels,
                    'available_gurus' => $availableGurus
                ]
            ]);

        } catch (\Exception $e) {
            Log::error('Error fetching mapel:', ['id' => $mapel->id, 'error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Gagal memuat mata pelajaran',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function update(Request $request, Mapel $mapel)
    {
        $validator = Validator::make($request->all(), [
            'nama_mapel' => 'required|string|max:255|unique:mapels,nama_mapel,' . $mapel->id,
            'kode_mapel' => 'required|string|max:10|unique:mapels,kode_mapel,' . $mapel->id,
            'fase' => 'nullable|string|max:10',
            'guru_ids' => 'nullable|array',
            'guru_ids.*' => 'exists:users,id,role,guru'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            DB::beginTransaction();

            // Simpan kode lama untuk update kolom di siswa
            $oldKode = $mapel->kode_mapel;
            
            $mapel->update([
                'nama_mapel' => $request->nama_mapel,
                'kode_mapel' => $request->kode_mapel,
                'fase' => $request->fase
            ]);

            // Update guru pengajar jika ada
            if ($request->has('guru_ids')) {
                $guruIds = $request->guru_ids ?? [];
                $mapel->gurus()->sync($guruIds);
                $mapel->load('gurus');
            }

            // Jika kode berubah, update kolom nilai di semua siswa
            if ($oldKode != $request->kode_mapel) {
                $this->updateKodeMapelInSiswas($oldKode, $request->kode_mapel);
            }

            // Tambahkan informasi tambahan
            $mapel->kolom_nilai = 'nilai_' . strtolower($mapel->kode_mapel);
            $mapel->kolom_keterangan = 'keterangan_' . strtolower($mapel->kode_mapel);
            $mapel->total_gurus = $mapel->gurus()->count();
            $mapel->nama_gurus = $mapel->gurus->pluck('name')->implode(', ');

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Mata pelajaran berhasil diupdate',
                'data' => $mapel
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error updating mapel:', ['id' => $mapel->id, 'error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengupdate mata pelajaran',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function destroy(Mapel $mapel)
    {
        try {
            DB::beginTransaction();

            // Cek apakah mapel digunakan di rombel manapun
            if ($mapel->rombels()->count() > 0) {
                return response()->json([
                    'success' => false,
                    'message' => 'Tidak dapat menghapus mata pelajaran',
                    'error' => 'Mata pelajaran masih digunakan di beberapa kelas'
                ], 422);
            }

            // Detach semua guru terlebih dahulu
            $mapel->detachAllGurus();
            
            // Hapus mapel
            $mapel->delete();

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Mata pelajaran berhasil dihapus'
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error deleting mapel:', ['id' => $mapel->id, 'error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Gagal menghapus mata pelajaran',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    // ==================== METHOD UNTUK GURU PENGAMPU ====================

    /**
     * Get all gurus for a specific mapel
     */
    public function gurus(Mapel $mapel)
    {
        try {
            $gurus = $mapel->gurus()
                ->orderBy('name')
                ->get(['users.id', 'name', 'email', 'wali_kelas']);

            return response()->json([
                'success' => true,
                'data' => $gurus,
                'count' => $gurus->count()
            ]);

        } catch (\Exception $e) {
            Log::error('Error fetching gurus for mapel:', ['id' => $mapel->id, 'error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Gagal memuat data guru pengajar',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Add guru to mapel
     */
    public function addGuru(Request $request, Mapel $mapel)
    {
        $validator = Validator::make($request->all(), [
            'guru_id' => 'required|exists:users,id,role,guru'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Cek apakah guru sudah mengajar mapel ini
            if ($mapel->hasGuru($request->guru_id)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Guru sudah mengajar mata pelajaran ini'
                ], 422);
            }

            // Attach guru ke mapel
            $mapel->attachGuru($request->guru_id);

            // Load guru data
            $guru = User::find($request->guru_id);

            return response()->json([
                'success' => true,
                'message' => 'Guru berhasil ditambahkan ke mata pelajaran',
                'data' => $guru
            ]);

        } catch (\Exception $e) {
            Log::error('Error adding guru to mapel:', [
                'mapel_id' => $mapel->id,
                'guru_id' => $request->guru_id,
                'error' => $e->getMessage()
            ]);
            return response()->json([
                'success' => false,
                'message' => 'Gagal menambahkan guru ke mata pelajaran',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove guru from mapel
     */
    public function removeGuru(Mapel $mapel, User $guru)
    {
        try {
            // Cek apakah guru mengajar mapel ini
            if (!$mapel->hasGuru($guru->id)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Guru tidak mengajar mata pelajaran ini'
                ], 404);
            }

            // Detach guru dari mapel
            $mapel->detachGuru($guru->id);

            return response()->json([
                'success' => true,
                'message' => 'Guru berhasil dihapus dari mata pelajaran'
            ]);

        } catch (\Exception $e) {
            Log::error('Error removing guru from mapel:', [
                'mapel_id' => $mapel->id,
                'guru_id' => $guru->id,
                'error' => $e->getMessage()
            ]);
            return response()->json([
                'success' => false,
                'message' => 'Gagal menghapus guru dari mata pelajaran',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Sync gurus for mapel
     */
    public function syncGurus(Request $request, Mapel $mapel)
    {
        $validator = Validator::make($request->all(), [
            'guru_ids' => 'required|array',
            'guru_ids.*' => 'exists:users,id,role,guru'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            DB::beginTransaction();

            // Sync guru dengan mapel
            $result = $mapel->syncGurus($request->guru_ids);

            // Load updated gurus
            $mapel->load('gurus');

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Guru pengajar berhasil diupdate',
                'data' => [
                    'mapel' => $mapel,
                    'sync_result' => $result
                ]
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error syncing gurus for mapel:', [
                'mapel_id' => $mapel->id,
                'guru_ids' => $request->guru_ids,
                'error' => $e->getMessage()
            ]);
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengupdate guru pengajar',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Get available gurus for mapel (guru yang belum mengajar mapel ini)
     */
    public function availableGurus(Mapel $mapel)
    {
        try {
            $availableGurus = $mapel->getAllAvailableGurus();

            return response()->json([
                'success' => true,
                'data' => $availableGurus,
                'count' => $availableGurus->count()
            ]);

        } catch (\Exception $e) {
            Log::error('Error fetching available gurus for mapel:', ['id' => $mapel->id, 'error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Gagal memuat data guru yang tersedia',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Get mapels taught by specific guru
     */
    public function mapelsByGuru(User $guru)
    {
        try {
            if (!$guru->isGuru()) {
                return response()->json([
                    'success' => false,
                    'message' => 'User ini bukan guru'
                ], 422);
            }

            $mapels = $guru->mapels()
                ->orderBy('nama_mapel')
                ->get();

            return response()->json([
                'success' => true,
                'data' => [
                    'guru' => $guru->only(['id', 'name', 'email', 'wali_kelas']),
                    'mapels' => $mapels,
                    'count' => $mapels->count()
                ]
            ]);

        } catch (\Exception $e) {
            Log::error('Error fetching mapels by guru:', ['guru_id' => $guru->id, 'error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Gagal memuat mata pelajaran yang diajarkan',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    // ==================== EXISTING METHODS (dari controller lama) ====================

    public function rombels(Mapel $mapel)
    {
        try {
            $rombels = $mapel->rombels()->withCount('siswas')->get();
            
            return response()->json([
                'success' => true,
                'data' => $rombels,
                'count' => $rombels->count()
            ]);

        } catch (\Exception $e) {
            Log::error('Error fetching rombels for mapel:', ['id' => $mapel->id, 'error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Gagal memuat data kelas',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function siswa(Mapel $mapel, Request $request)
    {
        try {
            $query = \App\Models\Siswa::whereHas('rombel.mapels', function($q) use ($mapel) {
                $q->where('mapels.id', $mapel->id);
            })->with('rombel');
            
            // Filter by rombel jika ada
            if ($request->has('rombel_id')) {
                $query->where('rombel_id', $request->rombel_id);
            }
            
            $siswas = $query->orderBy('nama', 'asc')->get();
            
            // Tambahkan nilai mapel untuk setiap siswa
            $siswas = $siswas->map(function($siswa) use ($mapel) {
                $siswa->nilai_mapel = $siswa->{'nilai_' . strtolower($mapel->kode_mapel)};
                $siswa->keterangan_mapel = $siswa->{'keterangan_' . strtolower($mapel->kode_mapel)};
                return $siswa;
            });

            return response()->json([
                'success' => true,
                'data' => $siswas,
                'count' => $siswas->count(),
                'mapel' => [
                    'id' => $mapel->id,
                    'nama_mapel' => $mapel->nama_mapel,
                    'kode_mapel' => $mapel->kode_mapel
                ]
            ]);

        } catch (\Exception $e) {
            Log::error('Error fetching siswa for mapel:', ['id' => $mapel->id, 'error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Gagal memuat data siswa',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    private function updateKodeMapelInSiswas($oldKode, $newKode)
    {
        try {
            $oldKode = strtolower($oldKode);
            $newKode = strtolower($newKode);
            
            // Update kolom nilai
            \DB::statement("ALTER TABLE siswas CHANGE nilai_{$oldKode} nilai_{$newKode} DECIMAL(5,2) NULL");
            
            // Update kolom keterangan
            \DB::statement("ALTER TABLE siswas CHANGE keterangan_{$oldKode} keterangan_{$newKode} VARCHAR(255) NULL");
            
            return true;
            
        } catch (\Exception $e) {
            Log::error('Error updating kode mapel in siswas:', [
                'old_kode' => $oldKode,
                'new_kode' => $newKode,
                'error' => $e->getMessage()
            ]);
            return false;
        }
    }

    public function kodeMapels()
    {
        try {
            $kodeMapels = Mapel::pluck('kode_mapel')->map(function($kode) {
                return [
                    'kode' => $kode,
                    'kolom_nilai' => 'nilai_' . strtolower($kode),
                    'kolom_keterangan' => 'keterangan_' . strtolower($kode)
                ];
            })->toArray();

            return response()->json([
                'success' => true,
                'data' => $kodeMapels,
                'count' => count($kodeMapels)
            ]);

        } catch (\Exception $e) {
            Log::error('Error fetching kode mapels:', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Gagal memuat kode mapel',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function statistics()
    {
        try {
            $totalMapels = Mapel::count();
            $mapelsByFase = Mapel::select('fase', \DB::raw('count(*) as total'))
                ->groupBy('fase')
                ->get();
            
            $totalRombelsUsingMapels = \DB::table('mapel_rombel')
                ->select(\DB::raw('count(distinct rombel_id) as total_rombels'))
                ->first()->total_rombels ?? 0;
            
            // Tambahkan statistik guru
            $mapelsWithGuru = Mapel::has('gurus')->count();
            $mapelsWithoutGuru = $totalMapels - $mapelsWithGuru;

            return response()->json([
                'success' => true,
                'data' => [
                    'total_mapels' => $totalMapels,
                    'mapels_by_fase' => $mapelsByFase,
                    'total_rombels_using_mapels' => $totalRombelsUsingMapels,
                    'mapels_with_guru' => $mapelsWithGuru,
                    'mapels_without_guru' => $mapelsWithoutGuru,
                    'percentage_with_guru' => $totalMapels > 0 ? round(($mapelsWithGuru / $totalMapels) * 100, 2) : 0
                ]
            ]);

        } catch (\Exception $e) {
            Log::error('Error fetching mapel statistics:', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Gagal memuat statistik mapel',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Get all available gurus for dropdown
     */
    public function getAllGurus()
    {
        try {
            $gurus = User::getGurusForDropdown();

            return response()->json([
                'success' => true,
                'data' => $gurus,
                'count' => $gurus->count()
            ]);

        } catch (\Exception $e) {
            Log::error('Error fetching all gurus:', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Gagal memuat data guru',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}