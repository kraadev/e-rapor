<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mapel extends Model
{
    protected $fillable = [
        'nama_mapel',
        'kode_mapel',
        'fase',
    ];

    /**
     * Relationship dengan Rombel (many-to-many)
     */
    public function rombels(): BelongsToMany
    {
        return $this->belongsToMany(Rombel::class, 'mapel_rombel')
                    ->withTimestamps();
    }

    /**
     * Relationship dengan User (Guru) - many-to-many
     */
    public function gurus(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'mapel_guru', 'mapel_id', 'user_id')
                    ->withTimestamps()
                    ->where('role', 'guru'); // Hanya ambil user dengan role guru
    }

    /**
     * Relationship dengan Capaian
     */
    public function capaian(): HasMany
    {
        return $this->hasMany(Capaian::class);
    }

    /**
     * Relationship dengan Nilai
     */
    public function nilai(): HasMany
    {
        return $this->hasMany(Nilai::class);
    }

    /**
     * Accessor untuk kolom nilai di tabel siswa
     */
    public function getKolomNilaiAttribute(): string
    {
        return 'nilai_' . strtolower($this->kode_mapel);
    }

    /**
     * Accessor untuk kolom keterangan di tabel siswa
     */
    public function getKolomKeteranganAttribute(): string
    {
        return 'keterangan_' . strtolower($this->kode_mapel);
    }

    /**
     * Accessor untuk jumlah guru yang mengajar
     */
    public function getTotalGuruAttribute(): int
    {
        return $this->gurus()->count();
    }

    /**
     * Accessor untuk daftar nama guru yang mengajar
     */
    public function getNamaGurusAttribute(): array
    {
        return $this->gurus()->pluck('name')->toArray();
    }

    /**
     * Scope untuk filter by fase
     */
    public function scopeByFase($query, $fase)
    {
        return $query->where('fase', $fase);
    }

    /**
     * Scope untuk filter by kode mapel
     */
    public function scopeByKode($query, $kode)
    {
        return $query->where('kode_mapel', 'like', "%{$kode}%");
    }

    /**
     * Scope untuk filter mapel dengan guru tertentu
     */
    public function scopeWithGuru($query, $guruId)
    {
        return $query->whereHas('gurus', function ($q) use ($guruId) {
            $q->where('user_id', $guruId);
        });
    }

    /**
     * Scope untuk filter mapel tanpa guru
     */
    public function scopeWithoutGuru($query)
    {
        return $query->doesntHave('gurus');
    }

    /**
     * Sync guru untuk mapel ini
     */
    public function syncGurus(array $guruIds): array
    {
        return $this->gurus()->sync($guruIds);
    }

    /**
     * Attach guru ke mapel ini
     */
    public function attachGuru($guruId): void
    {
        $this->gurus()->attach($guruId);
    }

    /**
     * Detach guru dari mapel ini
     */
    public function detachGuru($guruId): int
    {
        return $this->gurus()->detach($guruId);
    }

    /**
     * Detach semua guru dari mapel ini
     */
    public function detachAllGurus(): int
    {
        return $this->gurus()->detach();
    }

    /**
     * Get semua guru yang tersedia untuk mapel ini (termasuk yang belum mengajar)
     */
    public function getAllAvailableGurus()
    {
        $currentGuruIds = $this->gurus()->pluck('users.id')->toArray();
        
        return User::guru()
            ->whereNotIn('id', $currentGuruIds)
            ->orderBy('name')
            ->get(['id', 'name', 'email', 'wali_kelas']);
    }

    /**
     * Cek apakah guru mengajar mapel ini
     */
    public function hasGuru($guruId): bool
    {
        return $this->gurus()->where('user_id', $guruId)->exists();
    }

    /**
     * Mendapatkan daftar semua kode mapel yang tersedia
     */
    public static function getKodeMapelList(): array
    {
        return self::pluck('kode_mapel')
            ->map(function ($kode) {
                return strtolower($kode);
            })
            ->toArray();
    }

    /**
     * Mendapatkan mapel berdasarkan kode
     */
    public static function findByKode($kode): ?Mapel
    {
        return self::where('kode_mapel', strtoupper($kode))->first();
    }

    /**
     * Mendapatkan statistik mapel
     */
    public static function getStatistics(): array
    {
        $total = self::count();
        $withGuru = self::has('gurus')->count();
        $withoutGuru = $total - $withGuru;

        return [
            'total_mapels' => $total,
            'mapels_with_guru' => $withGuru,
            'mapels_without_guru' => $withoutGuru,
            'percentage_with_guru' => $total > 0 ? round(($withGuru / $total) * 100, 2) : 0,
        ];
    }

    /**
     * Mendapatkan mapel yang diajarkan oleh guru tertentu
     */
    public static function getByGuru($guruId)
    {
        return self::withGuru($guruId)->get();
    }
}