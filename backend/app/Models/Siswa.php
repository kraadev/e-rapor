<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Siswa extends Model
{
    protected $fillable = [
        'nis',
        'nisn', 
        'nama',
        'jk',
        'agama',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'no_hp',
        'nama_ayah',
        'nama_ibu',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
        'rombel_id',
        'status',
        'tahun_ajaran',
        'tanggal_masuk',
        'tanggal_keluar',
        // Kolom nilai mapel
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

    protected $casts = [
        'tanggal_lahir' => 'date',
        'tanggal_masuk' => 'date',
        'tanggal_keluar' => 'date',
        'nilai_mtk' => 'decimal:2',
        'nilai_bind' => 'decimal:2',
        'nilai_bing' => 'decimal:2',
        'nilai_ipas' => 'decimal:2',
        'nilai_ppkn' => 'decimal:2',
        'nilai_pjok' => 'decimal:2',
        'nilai_sb' => 'decimal:2',
        'nilai_sej' => 'decimal:2',
        'nilai_infor' => 'decimal:2',
        'nilai_mulok' => 'decimal:2',
        'nilai_pai' => 'decimal:2',
        'nilai_pak' => 'decimal:2',
        'nilai_pkwu' => 'decimal:2',
        'nilai_mpp' => 'decimal:2',
        'nilai_mkk' => 'decimal:2',
        'nilai_dpk' => 'decimal:2',
        'rata_rata_nilai' => 'decimal:2'
    ];

    protected $appends = [
        'kelas',
        'jurusan',
        'wali_kelas',
        'status_badge_class',
        'nilai_array',
        'jumlah_mapel_aktif',
        'persentase_terisi',
        'rata_rata_formatted'
    ];

    public function rombel(): BelongsTo
    {
        return $this->belongsTo(Rombel::class);
    }

    public function rapors(): HasMany
    {
        return $this->hasMany(Rapor::class);
    }

    // ==================== ACCESSORS ====================

    public function getKelasAttribute(): ?string
    {
        return $this->rombel ? $this->rombel->nama_kelas : null;
    }

    public function getJurusanAttribute(): ?string
    {
        return $this->rombel ? $this->rombel->jurusan : null;
    }

    public function getWaliKelasAttribute(): ?string
    {
        return $this->rombel ? $this->rombel->wali_kelas : null;
    }

    public function getStatusBadgeClassAttribute(): string
    {
        $classes = [
            'aktif' => 'bg-green-100 text-green-800',
            'lulus' => 'bg-blue-100 text-blue-800',
            'pindah' => 'bg-yellow-100 text-yellow-800',
            'dropout' => 'bg-red-100 text-red-800',
        ];

        return $classes[$this->status] ?? 'bg-gray-100 text-gray-800';
    }

    public function getJenisKelaminTextAttribute(): string
    {
        return $this->jk === 'L' ? 'Laki-laki' : 'Perempuan';
    }

    public function getRataRataFormattedAttribute(): ?string
    {
        return $this->rata_rata_nilai ? number_format($this->rata_rata_nilai, 2) : null;
    }

    // ==================== NILAI RELATED METHODS ====================

    public function getKolomNilaiAktif()
    {
        if (!$this->rombel || !$this->rombel->mapels) {
            return collect();
        }

        $kolomNilai = [];
        $mapelsAktif = $this->rombel->mapels;

        foreach ($mapelsAktif as $mapel) {
            $kode = strtolower($mapel->kode_mapel);
            $kolomNilai[] = [
                'mapel_id' => $mapel->id,
                'nama_mapel' => $mapel->nama_mapel,
                'kode_mapel' => $mapel->kode_mapel,
                'fase' => $mapel->fase,
                'kolom_nilai' => 'nilai_' . $kode,
                'kolom_keterangan' => 'keterangan_' . $kode,
                'nilai' => $this->{'nilai_' . $kode} ?? null,
                'keterangan' => $this->{'keterangan_' . $kode} ?? null,
                'nilai_formatted' => $this->{'nilai_' . $kode} !== null ? number_format($this->{'nilai_' . $kode}, 2) : '-',
                'predikat' => $this->hitungPredikat($this->{'nilai_' . $kode})
            ];
        }

        return collect($kolomNilai);
    }

    public function getNilaiArrayAttribute(): array
    {
        $nilaiArray = [];
        $kolomNilaiAktif = $this->getKolomNilaiAktif();

        foreach ($kolomNilaiAktif as $mapel) {
            $nilaiArray[] = [
                'id' => $mapel['mapel_id'],
                'nama_mapel' => $mapel['nama_mapel'],
                'kode_mapel' => $mapel['kode_mapel'],
                'fase' => $mapel['fase'],
                'nilai' => $mapel['nilai'],
                'keterangan' => $mapel['keterangan'],
                'nilai_formatted' => $mapel['nilai_formatted'],
                'predikat' => $mapel['predikat']
            ];
        }

        return $nilaiArray;
    }

    public function getJumlahMapelAktifAttribute(): int
    {
        return $this->rombel ? $this->rombel->mapels->count() : 0;
    }

    public function getPersentaseTerisiAttribute(): float
    {
        $kolomNilaiAktif = $this->getKolomNilaiAktif();
        $total = $kolomNilaiAktif->count();
        
        if ($total === 0) {
            return 0;
        }

        $terisi = $kolomNilaiAktif->where('nilai', '!=', null)->count();
        return round(($terisi / $total) * 100, 2);
    }

    public function getNilaiByMapel($mapelKode): ?float
    {
        $kode = strtolower($mapelKode);
        $kolomNilai = 'nilai_' . $kode;
        
        return $this->$kolomNilai ?? null;
    }

    public function getKeteranganByMapel($mapelKode): ?string
    {
        $kode = strtolower($mapelKode);
        $kolomKeterangan = 'keterangan_' . $kode;
        
        return $this->$kolomKeterangan ?? null;
    }

    // ==================== NILAI OPERATIONS ====================

    public function updateNilai($data): bool
    {
        $totalNilai = 0;
        $countNilai = 0;

        // Update nilai untuk setiap kolom
        foreach ($data as $key => $value) {
            if (in_array($key, $this->fillable)) {
                $this->$key = $value !== '' && $value !== null ? $value : null;
                
                // Hitung jika ini adalah kolom nilai
                if (strpos($key, 'nilai_') === 0 && $value !== null && $value !== '') {
                    $totalNilai += (float) $value;
                    $countNilai++;
                }
            }
        }

        // Hitung rata-rata
        $this->hitungRataRataNilai();

        return $this->save();
    }

    public function hitungRataRataNilai(): void
    {
        $kolomNilaiAktif = $this->getKolomNilaiAktif();
        
        if ($kolomNilaiAktif->isEmpty()) {
            $this->rata_rata_nilai = null;
            $this->predikat = null;
            return;
        }

        $totalNilai = 0;
        $countNilai = 0;

        foreach ($kolomNilaiAktif as $mapel) {
            if ($mapel['nilai'] !== null) {
                $totalNilai += (float) $mapel['nilai'];
                $countNilai++;
            }
        }

        if ($countNilai > 0) {
            $rataRata = $totalNilai / $countNilai;
            $this->rata_rata_nilai = round($rataRata, 2);
            $this->predikat = $this->hitungPredikat($rataRata);
        } else {
            $this->rata_rata_nilai = null;
            $this->predikat = null;
        }
    }

    public function hitungPredikat(?float $nilai): ?string
    {
        if ($nilai === null) {
            return null;
        }

        if ($nilai >= 90) return 'Sangat Baik (A)';
        if ($nilai >= 80) return 'Baik (B)';
        if ($nilai >= 70) return 'Cukup (C)';
        if ($nilai >= 60) return 'Kurang (D)';
        return 'Sangat Kurang (E)';
    }

    // ==================== STRUCTURE MANAGEMENT ====================

    public function initNilaiMapelStructure(): void
    {
        if (!$this->rombel || !$this->rombel->mapels) {
            return;
        }

        $mapels = $this->rombel->mapels;
        $isDirty = false;
        
        foreach ($mapels as $mapel) {
            $kode = strtolower($mapel->kode_mapel);
            $kolomNilai = 'nilai_' . $kode;
            $kolomKeterangan = 'keterangan_' . $kode;

            // Inisialisasi kolom nilai jika belum ada
            if (!array_key_exists($kolomNilai, $this->attributes) || $this->$kolomNilai === null) {
                $this->$kolomNilai = null;
                $isDirty = true;
            }

            // Inisialisasi kolom keterangan jika belum ada
            if (!array_key_exists($kolomKeterangan, $this->attributes) || $this->$kolomKeterangan === null) {
                $this->$kolomKeterangan = null;
                $isDirty = true;
            }
        }

        if ($isDirty) {
            $this->save();
        }
    }

    public function resetNilaiMapelTidakAktif(): void
    {
        if (!$this->rombel) {
            return;
        }

        $mapelsAktif = $this->rombel->mapels->pluck('kode_mapel')->map(function ($kode) {
            return strtolower($kode);
        })->toArray();

        $allMapels = ['mtk', 'bind', 'bing', 'ipas', 'ppkn', 'pjok', 'sb', 'sej', 'infor', 'mulok', 'pai', 'pak', 'pkwu', 'mpp', 'mkk', 'dpk'];

        foreach ($allMapels as $kode) {
            if (!in_array($kode, $mapelsAktif)) {
                $kolomNilai = 'nilai_' . $kode;
                $kolomKeterangan = 'keterangan_' . $kode;

                if (array_key_exists($kolomNilai, $this->attributes)) {
                    $this->$kolomNilai = null;
                }
                if (array_key_exists($kolomKeterangan, $this->attributes)) {
                    $this->$kolomKeterangan = null;
                }
            }
        }

        $this->hitungRataRataNilai();
        $this->save();
    }

    // ==================== SCOPES ====================

    public function scopeAktif($query)
    {
        return $query->where('status', 'aktif');
    }

    public function scopeByRombel($query, $rombelId)
    {
        return $query->where('rombel_id', $rombelId);
    }

    public function scopeWithNilai($query, $minNilai = null, $maxNilai = null)
    {
        if ($minNilai !== null) {
            $query->where(function($q) use ($minNilai) {
                $kolomNilai = [
                    'nilai_mtk', 'nilai_bind', 'nilai_bing', 'nilai_ipas',
                    'nilai_ppkn', 'nilai_pjok', 'nilai_sb', 'nilai_sej',
                    'nilai_infor', 'nilai_mulok', 'nilai_pai', 'nilai_pak',
                    'nilai_pkwu', 'nilai_mpp', 'nilai_mkk', 'nilai_dpk'
                ];
                
                foreach ($kolomNilai as $kolom) {
                    $q->orWhere($kolom, '>=', $minNilai);
                }
            });
        }

        if ($maxNilai !== null) {
            $query->where(function($q) use ($maxNilai) {
                $kolomNilai = [
                    'nilai_mtk', 'nilai_bind', 'nilai_bing', 'nilai_ipas',
                    'nilai_ppkn', 'nilai_pjok', 'nilai_sb', 'nilai_sej',
                    'nilai_infor', 'nilai_mulok', 'nilai_pai', 'nilai_pak',
                    'nilai_pkwu', 'nilai_mpp', 'nilai_mkk', 'nilai_dpk'
                ];
                
                foreach ($kolomNilai as $kolom) {
                    $q->orWhere($kolom, '<=', $maxNilai);
                }
            });
        }

        return $query;
    }

    public function scopeSearch($query, $search)
    {
        return $query->where(function($q) use ($search) {
            $q->where('nis', 'like', "%{$search}%")
              ->orWhere('nama', 'like', "%{$search}%")
              ->orWhere('nisn', 'like', "%{$search}%");
        });
    }

    public function scopeWithRombel($query)
    {
        return $query->with(['rombel' => function($q) {
            $q->with('mapels');
        }]);
    }

    // ==================== EVENT HANDLERS ====================

    protected static function booted(): void
    {
        static::saving(function ($siswa) {
            // Pastikan nilai-nilai numerik diubah ke tipe yang benar
            $nilaiKolom = [
                'nilai_mtk', 'nilai_bind', 'nilai_bing', 'nilai_ipas',
                'nilai_ppkn', 'nilai_pjok', 'nilai_sb', 'nilai_sej',
                'nilai_infor', 'nilai_mulok', 'nilai_pai', 'nilai_pak',
                'nilai_pkwu', 'nilai_mpp', 'nilai_mkk', 'nilai_dpk'
            ];

            foreach ($nilaiKolom as $kolom) {
                if (isset($siswa->$kolom) && ($siswa->$kolom === '' || $siswa->$kolom === null)) {
                    $siswa->$kolom = null;
                }
            }
        });

        static::saved(function ($siswa) {
            // Auto-calculate rata-rata setiap kali data disimpan
            if ($siswa->wasChanged(array_merge(
                ['rombel_id'],
                array_map(fn($k) => 'nilai_' . $k, 
                    ['mtk', 'bind', 'bing', 'ipas', 'ppkn', 'pjok', 'sb', 'sej', 'infor', 'mulok', 'pai', 'pak', 'pkwu', 'mpp', 'mkk', 'dpk']
                )
            ))) {
                $siswa->hitungRataRataNilai();
                $siswa->saveQuietly();
            }
        });
    }

    // ==================== UTILITY METHODS ====================

    public function getStatistikNilai(): array
    {
        $kolomNilaiAktif = $this->getKolomNilaiAktif();
        
        $tertinggi = $kolomNilaiAktif->where('nilai', '!=', null)->max('nilai');
        $terendah = $kolomNilaiAktif->where('nilai', '!=', null)->min('nilai');
        $terisi = $kolomNilaiAktif->where('nilai', '!=', null)->count();
        $total = $kolomNilaiAktif->count();

        return [
            'rata_rata' => $this->rata_rata_nilai,
            'predikat' => $this->predikat,
            'nilai_tertinggi' => $tertinggi,
            'nilai_terendah' => $terendah,
            'mapel_terisi' => $terisi,
            'total_mapel' => $total,
            'persentase_terisi' => $total > 0 ? round(($terisi / $total) * 100, 2) : 0
        ];
    }

    public function getNilaiForExport(): array
    {
        $kolomNilaiAktif = $this->getKolomNilaiAktif();
        $nilaiArray = [];

        foreach ($kolomNilaiAktif as $mapel) {
            $nilaiArray[$mapel['kode_mapel']] = [
                'nilai' => $mapel['nilai'],
                'keterangan' => $mapel['keterangan'],
                'predikat' => $mapel['predikat']
            ];
        }

        return $nilaiArray;
    }

    public function getNilaiByMapelId($mapelId): ?array
    {
        if (!$this->rombel) {
            return null;
        }

        $mapel = $this->rombel->mapels->where('id', $mapelId)->first();
        if (!$mapel) {
            return null;
        }

        $kode = strtolower($mapel->kode_mapel);
        
        return [
            'nilai' => $this->{'nilai_' . $kode},
            'keterangan' => $this->{'keterangan_' . $kode},
            'predikat' => $this->hitungPredikat($this->{'nilai_' . $kode})
        ];
    }
}