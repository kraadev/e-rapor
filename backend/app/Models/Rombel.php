<?php
// app/Models/Rombel.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rombel extends Model
{
    use HasFactory;

    protected $fillable = [
        'wali_kelas',
        'nama_kelas', 
        'jurusan',
        'tingkat',
        'user_id' // TAMBAHKAN INI
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Relationship dengan User (wali kelas)
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relationship dengan Siswa
     */
    public function siswas(): HasMany
    {
        return $this->hasMany(Siswa::class, 'rombel_id');
    }

    /**
     * Relationship dengan Mapel (many-to-many)
     */
    public function mapels(): BelongsToMany
    {
        return $this->belongsToMany(Mapel::class, 'mapel_rombel')
                    ->withTimestamps()
                    ->orderBy('nama_mapel');
    }

    /**
     * Relationship dengan Rapor
     */
    public function rapors(): HasMany
    {
        return $this->hasMany(Rapor::class, 'rombel_id');
    }

    /**
     * Scope untuk filter by tingkat
     */
    public function scopeByTingkat($query, $tingkat)
    {
        return $query->where('tingkat', $tingkat);
    }

    /**
     * Scope untuk filter by jurusan
     */
    public function scopeByJurusan($query, $jurusan)
    {
        return $query->where('jurusan', 'like', "%{$jurusan}%");
    }

    /**
     * Scope untuk filter by user (wali kelas)
     */
    public function scopeByUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }

    /**
     * Accessor untuk nama kelas lengkap
     */
    public function getNamaKelasLengkapAttribute()
    {
        return "{$this->tingkat} {$this->nama_kelas} - {$this->jurusan}";
    }

    /**
     * Accessor untuk informasi wali kelas lengkap
     */
    public function getWaliKelasInfoAttribute()
    {
        if ($this->user) {
            return [
                'id' => $this->user->id,
                'name' => $this->user->name,
                'email' => $this->user->email,
                'role' => $this->user->role,
                'wali_kelas' => $this->user->wali_kelas
            ];
        }
        
        return [
            'id' => null,
            'name' => $this->wali_kelas,
            'email' => null,
            'role' => null,
            'wali_kelas' => null
        ];
    }

    // ==================== METHOD BARU UNTUK MAPEL ====================

    /**
     * Sync mapel untuk rombel
     */
    public function syncMapels(array $mapelIds)
    {
        $result = $this->mapels()->sync($mapelIds);
        
        // Reset nilai mapel yang tidak aktif untuk semua siswa
        $this->resetNilaiMapelTidakAktif();
        
        return $result;
    }

    /**
     * Reset nilai mapel yang tidak aktif untuk semua siswa di rombel ini
     */
    public function resetNilaiMapelTidakAktif()
    {
        $mapelsAktif = $this->mapels()->pluck('kode_mapel')->map(function ($kode) {
            return strtolower($kode);
        })->toArray();

        $allMapels = ['mtk', 'bind', 'bing', 'ipas', 'ppkn', 'pjok', 'sb', 'sej', 'infor', 'mulok', 'pai', 'pak', 'pkwu', 'mpp', 'mkk', 'dpk'];

        foreach ($this->siswas as $siswa) {
            foreach ($allMapels as $kode) {
                if (!in_array($kode, $mapelsAktif)) {
                    $siswa->{'nilai_' . $kode} = null;
                    $siswa->{'keterangan_' . $kode} = null;
                }
            }
            $siswa->hitungRataRata();
            $siswa->save();
        }
    }

    /**
     * Mendapatkan daftar kode mapel yang aktif
     */
    public function getKodeMapelAktifAttribute()
    {
        return $this->mapels()->pluck('kode_mapel')->map(function ($kode) {
            return strtolower($kode);
        })->toArray();
    }

    /**
     * Mendapatkan daftar mapel yang aktif dengan detail
     */
    public function getMapelAktifDetailAttribute()
    {
        return $this->mapels()->get()->map(function ($mapel) {
            return [
                'id' => $mapel->id,
                'nama_mapel' => $mapel->nama_mapel,
                'kode_mapel' => $mapel->kode_mapel,
                'fase' => $mapel->fase,
                'kolom_nilai' => 'nilai_' . strtolower($mapel->kode_mapel),
                'kolom_keterangan' => 'keterangan_' . strtolower($mapel->kode_mapel)
            ];
        });
    }

    /**
     * Inisialisasi struktur nilai untuk siswa baru
     */
    public function initNilaiStructureForSiswa($siswa)
    {
        $mapels = $this->mapels;
        
        foreach ($mapels as $mapel) {
            $kode = strtolower($mapel->kode_mapel);
            $siswa->{'nilai_' . $kode} = null;
            $siswa->{'keterangan_' . $kode} = null;
        }
        
        return $siswa;
    }
}