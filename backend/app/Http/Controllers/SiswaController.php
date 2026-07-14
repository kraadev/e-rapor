<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Rombel;
use App\Models\Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = Siswa::with(['rombel', 'rombel.mapels']);

            // Filter by rombel jika ada
            if ($request->has('rombel_id')) {
                $query->where('rombel_id', $request->rombel_id);
            }

            // Filter by status jika ada
            if ($request->has('status')) {
                $query->where('status', $request->status);
            }

            // Filter by search query
            if ($request->has('search')) {
                $search = $request->search;
                $query->where(function($q) use ($search) {
                    $q->where('nis', 'like', "%{$search}%")
                      ->orWhere('nama', 'like', "%{$search}%")
                      ->orWhere('nisn', 'like', "%{$search}%");
                });
            }

            $siswas = $query->orderBy('nama', 'asc')->get();

            return response()->json([
                'success' => true,
                'message' => 'Data siswa berhasil diambil',
                'data' => $siswas,
                'count' => $siswas->count()
            ]);

        } catch (\Exception $e) {
            Log::error('Error fetching siswa:', ['error' => $e->getMessage()]);
            
            return response()->json([
                'success' => false,
                'error' => 'Gagal memuat data siswa',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    // TAMBAH METHOD INI: Ambil siswa berdasarkan rombel_id
    public function byRombel($rombelId)
    {
        try {
            // Cari rombel berdasarkan ID
            $rombel = Rombel::with(['siswas', 'mapels'])->find($rombelId);
            
            if (!$rombel) {
                return response()->json([
                    'success' => false,
                    'message' => 'Rombel tidak ditemukan'
                ], 404);
            }
            
            return response()->json([
                'success' => true,
                'rombel' => [
                    'id' => $rombel->id,
                    'nama_kelas' => $rombel->nama_kelas,
                    'wali_kelas' => $rombel->wali_kelas,
                    'jurusan' => $rombel->jurusan,
                    'tingkat' => $rombel->tingkat,
                    'jumlah_siswa' => $rombel->siswas->count(),
                    'jumlah_mapel' => $rombel->mapels->count()
                ],
                'siswas' => $rombel->siswas->map(function($siswa) {
                    $siswa->kolom_nilai_aktif = $siswa->getKolomNilaiAktif();
                    return $siswa;
                }),
                'mapels' => $rombel->mapels,
                'count' => $rombel->siswas->count()
            ]);
            
        } catch (\Exception $e) {
            Log::error('Error fetching siswa by rombel:', ['rombel_id' => $rombelId, 'error' => $e->getMessage()]);
            
            return response()->json([
                'success' => false,
                'error' => 'Gagal memuat data siswa',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    // Method untuk mendapatkan form tambah siswa
    public function createData()
    {
        try {
            $rombels = Rombel::orderBy('nama_kelas', 'asc')->get();
            $allMapels = Mapel::orderBy('nama_mapel')->get();
            
            return response()->json([
                'success' => true,
                'data' => [
                    'rombels' => $rombels,
                    'mapels' => $allMapels,
                    'status_options' => ['aktif', 'lulus', 'pindah', 'dropout'],
                    'jk_options' => ['L', 'P'],
                    'agama_options' => ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Konghucu']
                ]
            ]);
            
        } catch (\Exception $e) {
            Log::error('Error fetching create data:', ['error' => $e->getMessage()]);
            
            return response()->json([
                'success' => false,
                'error' => 'Gagal memuat data form',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        
        try {
            // UPDATE VALIDASI DENGAN KOLOM BARU
            $validated = $request->validate([
                'nis' => 'required|unique:siswas',
                'nisn' => 'nullable|unique:siswas',
                'nama' => 'required|string|max:255',
                'jk' => 'required|in:L,P',
                'agama' => 'nullable|in:Islam,Kristen,Katolik,Hindu,Budha,Konghucu',
                'tempat_lahir' => 'nullable|string|max:100',
                'tanggal_lahir' => 'nullable|date',
                'alamat' => 'nullable|string',
                'no_hp' => 'nullable|string|max:20',
                'nama_ayah' => 'nullable|string|max:255',
                'nama_ibu' => 'nullable|string|max:255',
                'pekerjaan_ayah' => 'nullable|string|max:100',
                'pekerjaan_ibu' => 'nullable|string|max:100',
                'rombel_id' => 'required|exists:rombels,id',
                'status' => 'nullable|in:aktif,lulus,pindah,dropout',
                'tahun_ajaran' => 'nullable|string',
                'tanggal_masuk' => 'nullable|date',
                'tanggal_keluar' => 'nullable|date'
            ]);

            $siswa = Siswa::create($validated);

            // Inisialisasi struktur nilai berdasarkan mapel di rombel
            $siswa->initNilaiMapelStructure();

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Siswa berhasil ditambahkan',
                'data' => $siswa->load(['rombel', 'rombel.mapels'])
            ], 201);

        } catch (\Illuminate\Validation\ValidationException $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'error' => 'Validasi gagal',
                'messages' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error creating siswa:', ['error' => $e->getMessage()]);
            
            return response()->json([
                'success' => false,
                'error' => 'Gagal menambahkan siswa',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function show(Siswa $siswa)
    {
        try {
            $siswa->load(['rombel', 'rombel.mapels']);
            
            // Tambahkan kolom nilai aktif
            $siswa->kolom_nilai_aktif = $siswa->getKolomNilaiAktif();
            
            return response()->json([
                'success' => true,
                'data' => $siswa
            ]);
            
        } catch (\Exception $e) {
            Log::error('Error fetching siswa:', ['id' => $siswa->id, 'error' => $e->getMessage()]);
            
            return response()->json([
                'success' => false,
                'error' => 'Gagal memuat data siswa',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    // Method untuk mendapatkan form edit siswa
    public function editData(Siswa $siswa)
    {
        try {
            $siswa->load(['rombel', 'rombel.mapels']);
            $rombels = Rombel::orderBy('nama_kelas', 'asc')->get();
            $allMapels = Mapel::orderBy('nama_mapel')->get();
            
            // Tambahkan kolom nilai aktif
            $siswa->kolom_nilai_aktif = $siswa->getKolomNilaiAktif();
            
            return response()->json([
                'success' => true,
                'data' => [
                    'siswa' => $siswa,
                    'rombels' => $rombels,
                    'mapels' => $allMapels,
                    'status_options' => ['aktif', 'lulus', 'pindah', 'dropout'],
                    'jk_options' => ['L', 'P'],
                    'agama_options' => ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Konghucu']
                ]
            ]);
            
        } catch (\Exception $e) {
            Log::error('Error fetching edit data:', ['id' => $siswa->id, 'error' => $e->getMessage()]);
            
            return response()->json([
                'success' => false,
                'error' => 'Gagal memuat data form',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function update(Request $request, Siswa $siswa)
    {
        DB::beginTransaction();
        
        try {
            // Daftar semua field yang bisa diupdate
            $allowedFields = [
                'nis', 'nisn', 'nama', 'jk', 'agama',
                'tempat_lahir', 'tanggal_lahir', 'alamat', 'no_hp',
                'nama_ayah', 'nama_ibu', 'pekerjaan_ayah', 'pekerjaan_ibu',
                'rombel_id', 'status', 'tahun_ajaran', 'tanggal_masuk', 'tanggal_keluar',
                // Kolom nilai
                'nilai_mtk', 'keterangan_mtk',
                'nilai_bind', 'keterangan_bind',
                'nilai_bing', 'keterangan_bing',
                'nilai_ipas', 'keterangan_ipas',
                'nilai_ppkn', 'keterangan_ppkn',
                'nilai_pjok', 'keterangan_pjok',
                'nilai_sb', 'keterangan_sb',
                'nilai_sej', 'keterangan_sej',
                'nilai_infor', 'keterangan_infor',
                'nilai_mulok', 'keterangan_mulok',
                'nilai_pai', 'keterangan_pai',
                'nilai_pak', 'keterangan_pak',
                'nilai_pkwu', 'keterangan_pkwu',
                'nilai_mpp', 'keterangan_mpp',
                'nilai_mkk', 'keterangan_mkk',
                'nilai_dpk', 'keterangan_dpk',
                'rata_rata_nilai', 'predikat'
            ];

            // Validasi dinamis berdasarkan field yang ada di request
            $validationRules = [];
            
            foreach ($request->all() as $field => $value) {
                if (in_array($field, $allowedFields)) {
                    // Validasi untuk kolom nilai
                    if (strpos($field, 'nilai_') === 0) {
                        $validationRules[$field] = 'nullable|numeric|min:0|max:100';
                    } 
                    // Validasi untuk kolom keterangan
                    elseif (strpos($field, 'keterangan_') === 0) {
                        $validationRules[$field] = 'nullable|string|max:255';
                    }
                    // Validasi untuk NIS (unique dengan pengecualian ID siswa ini)
                    elseif ($field === 'nis') {
                        $validationRules[$field] = 'sometimes|required|unique:siswas,nis,' . $siswa->id;
                    }
                    // Validasi untuk NISN (unique dengan pengecualian ID siswa ini)
                    elseif ($field === 'nisn') {
                        $validationRules[$field] = 'nullable|unique:siswas,nisn,' . $siswa->id;
                    }
                    // Validasi untuk rata-rata dan predikat
                    elseif ($field === 'rata_rata_nilai') {
                        $validationRules[$field] = 'nullable|numeric|min:0|max:100';
                    }
                    elseif ($field === 'predikat') {
                        $validationRules[$field] = 'nullable|string|max:50';
                    }
                    // Validasi untuk field umum
                    else {
                        $validationRules[$field] = 'nullable';
                    }
                }
            }

            // Validasi request
            $validated = $request->validate($validationRules);

            // Periksa apakah rombel berubah
            $rombelChanged = isset($validated['rombel_id']) && $siswa->rombel_id != $validated['rombel_id'];
            
            // Update data siswa
            $siswa->update($validated);

            // Jika rombel berubah, reset struktur nilai
            if ($rombelChanged) {
                $siswa->resetNilaiMapelTidakAktif();
                $siswa->initNilaiMapelStructure();
            }

            // Hitung rata-rata jika ada nilai yang diupdate
            $siswa->hitungRataRataNilai();

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Data siswa berhasil diperbarui',
                'data' => $siswa->load(['rombel', 'rombel.mapels'])
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'error' => 'Validasi gagal',
                'messages' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error updating siswa:', ['id' => $siswa->id, 'error' => $e->getMessage()]);
            
            return response()->json([
                'success' => false,
                'error' => 'Gagal mengupdate siswa',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function destroy(Siswa $siswa)
    {
        DB::beginTransaction();
        
        try {
            $siswa->delete();
            
            DB::commit();
            
            return response()->json([
                'success' => true,
                'message' => 'Data siswa berhasil dihapus'
            ]);
            
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error deleting siswa:', ['id' => $siswa->id, 'error' => $e->getMessage()]);
            
            return response()->json([
                'success' => false,
                'error' => 'Gagal menghapus siswa',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    // ==================== METHOD BARU UNTUK NILAI ====================

    /**
     * Mendapatkan form nilai untuk siswa
     */
    public function getNilaiForm(Siswa $siswa)
    {
        try {
            $siswa->load(['rombel', 'rombel.mapels']);
            $kolomNilaiAktif = $siswa->getKolomNilaiAktif();
            
            return response()->json([
                'success' => true,
                'data' => [
                    'siswa' => $siswa,
                    'kolom_nilai_aktif' => $kolomNilaiAktif,
                    'total_mapel_aktif' => $kolomNilaiAktif->count(),
                    'rata_rata' => $siswa->rata_rata_nilai,
                    'predikat' => $siswa->predikat
                ]
            ]);
            
        } catch (\Exception $e) {
            Log::error('Error fetching nilai form:', ['id' => $siswa->id, 'error' => $e->getMessage()]);
            
            return response()->json([
                'success' => false,
                'error' => 'Gagal memuat form nilai',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Mengupdate nilai siswa
     */
    public function updateNilai(Request $request, Siswa $siswa)
    {
        DB::beginTransaction();
        
        try {
            // Validasi untuk semua kolom nilai
            $validationRules = [];
            
            // Daftar semua kolom nilai yang mungkin
            $kolomNilai = [
                'nilai_mtk', 'keterangan_mtk',
                'nilai_bind', 'keterangan_bind',
                'nilai_bing', 'keterangan_bing',
                'nilai_ipas', 'keterangan_ipas',
                'nilai_ppkn', 'keterangan_ppkn',
                'nilai_pjok', 'keterangan_pjok',
                'nilai_sb', 'keterangan_sb',
                'nilai_sej', 'keterangan_sej',
                'nilai_infor', 'keterangan_infor',
                'nilai_mulok', 'keterangan_mulok',
                'nilai_pai', 'keterangan_pai',
                'nilai_pak', 'keterangan_pak',
                'nilai_pkwu', 'keterangan_pkwu',
                'nilai_mpp', 'keterangan_mpp',
                'nilai_mkk', 'keterangan_mkk',
                'nilai_dpk', 'keterangan_dpk'
            ];
            
            foreach ($kolomNilai as $kolom) {
                if (strpos($kolom, 'nilai_') === 0) {
                    $validationRules[$kolom] = 'nullable|numeric|min:0|max:100';
                } else {
                    $validationRules[$kolom] = 'nullable|string|max:255';
                }
            }
            
            $validated = $request->validate($validationRules);
            
            // Update nilai
            $siswa->update($validated);
            
            // Hitung rata-rata
            $siswa->hitungRataRataNilai();
            
            DB::commit();
            
            return response()->json([
                'success' => true,
                'message' => 'Nilai berhasil diperbarui',
                'data' => [
                    'siswa' => $siswa->fresh(['rombel']),
                    'rata_rata' => $siswa->rata_rata_nilai,
                    'predikat' => $siswa->predikat
                ]
            ]);
            
        } catch (\Illuminate\Validation\ValidationException $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'error' => 'Validasi gagal',
                'messages' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error updating nilai:', ['id' => $siswa->id, 'error' => $e->getMessage()]);
            
            return response()->json([
                'success' => false,
                'error' => 'Gagal mengupdate nilai',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Mendapatkan laporan nilai siswa
     */
    public function getLaporanNilai(Siswa $siswa)
    {
        try {
            $siswa->load(['rombel', 'rombel.mapels']);
            $kolomNilaiAktif = $siswa->getKolomNilaiAktif();
            
            $totalMapel = $kolomNilaiAktif->count();
            $mapelTerisi = $kolomNilaiAktif->where('nilai', '!=', null)->count();
            
            return response()->json([
                'success' => true,
                'data' => [
                    'siswa' => [
                        'id' => $siswa->id,
                        'nis' => $siswa->nis,
                        'nama' => $siswa->nama,
                        'kelas' => $siswa->kelas,
                        'jurusan' => $siswa->jurusan,
                        'wali_kelas' => $siswa->wali_kelas,
                        'rata_rata' => $siswa->rata_rata_nilai,
                        'predikat' => $siswa->predikat
                    ],
                    'nilai' => $kolomNilaiAktif,
                    'statistik' => [
                        'total_mapel' => $totalMapel,
                        'mapel_terisi' => $mapelTerisi,
                        'persentase_terisi' => $totalMapel > 0 ? round(($mapelTerisi / $totalMapel) * 100, 2) : 0
                    ]
                ]
            ]);
            
        } catch (\Exception $e) {
            Log::error('Error fetching laporan nilai:', ['id' => $siswa->id, 'error' => $e->getMessage()]);
            
            return response()->json([
                'success' => false,
                'error' => 'Gagal memuat laporan nilai',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Import nilai dari CSV/Excel
     */
    public function importNilai(Request $request, Siswa $siswa)
    {
        try {
            // Implementasi import nilai nanti
            return response()->json([
                'success' => false,
                'error' => 'Fitur import nilai belum tersedia'
            ], 501);
            
        } catch (\Exception $e) {
            Log::error('Error importing nilai:', ['id' => $siswa->id, 'error' => $e->getMessage()]);
            
            return response()->json([
                'success' => false,
                'error' => 'Gagal mengimport nilai',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
