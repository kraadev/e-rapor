<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'wali_kelas',
        'pembina_ekskul',
        'pembina_p5',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Relationship dengan Rombel (jika user adalah wali kelas)
     */
    public function rombel(): HasOne
    {
        return $this->hasOne(Rombel::class, 'user_id');
    }

    /**
     * Relationship dengan Mapel (many-to-many)
     */
    public function mapels(): BelongsToMany
    {
        return $this->belongsToMany(Mapel::class, 'mapel_guru', 'user_id', 'mapel_id')
                    ->withTimestamps();
    }

    // ==================== SCOPE METHODS ====================

    /**
     * Scope a query to only include users with specific role.
     */
    public function scopeByRole($query, $role)
    {
        return $query->where('role', $role);
    }

    /**
     * Scope untuk hanya menampilkan guru
     */
    public function scopeGuru($query)
    {
        return $query->where('role', 'guru');
    }

    /**
     * Scope untuk hanya menampilkan admin
     */
    public function scopeAdmin($query)
    {
        return $query->where('role', 'admin');
    }

    /**
     * Scope untuk guru yang mengajar mapel tertentu
     */
    public function scopeMengajarMapel($query, $mapelId)
    {
        return $query->whereHas('mapels', function ($q) use ($mapelId) {
            $q->where('mapels.id', $mapelId);
        });
    }

    /**
     * Scope untuk guru yang belum mengajar mapel tertentu
     */
    public function scopeTidakMengajarMapel($query, $mapelId)
    {
        return $query->whereDoesntHave('mapels', function ($q) use ($mapelId) {
            $q->where('mapels.id', $mapelId);
        });
    }

    /**
     * Scope a query to search users by name or email.
     */
    public function scopeSearch($query, $search)
    {
        return $query->where(function ($q) use ($search) {
            $q->where('name', 'like', '%' . $search . '%')
              ->orWhere('email', 'like', '%' . $search . '%')
              ->orWhere('wali_kelas', 'like', '%' . $search . '%')
              ->orWhere('pembina_ekskul', 'like', '%' . $search . '%')
              ->orWhere('pembina_p5', 'like', '%' . $search . '%');
        });
    }

    /**
     * Scope untuk guru yang belum memiliki kelas
     */
    public function scopeGuruTanpaKelas($query)
    {
        return $query->where('role', 'guru')
                     ->whereNull('wali_kelas');
    }

    /**
     * Scope untuk guru yang sudah memiliki kelas
     */
    public function scopeGuruDenganKelas($query)
    {
        return $query->where('role', 'guru')
                     ->whereNotNull('wali_kelas');
    }

    /**
     * Scope untuk guru yang belum mengajar mapel apapun
     */
    public function scopeGuruTanpaMapel($query)
    {
        return $query->where('role', 'guru')
                     ->doesntHave('mapels');
    }

    /**
     * Scope untuk guru yang sudah mengajar mapel
     */
    public function scopeGuruDenganMapel($query)
    {
        return $query->where('role', 'guru')
                     ->has('mapels');
    }

    /**
     * Scope untuk guru yang tersedia untuk mapel tertentu
     */
    public function scopeAvailableForMapel($query, $mapelId = null)
    {
        if ($mapelId) {
            return $query->where('role', 'guru')
                         ->tidakMengajarMapel($mapelId);
        }
        
        return $query->where('role', 'guru');
    }

    // ==================== HELPER METHODS ====================

    /**
     * Check if user is admin
     */
    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    /**
     * Check if user is guru
     */
    public function isGuru(): bool
    {
        return $this->role === 'guru';
    }

    /**
     * Check if user has specific role
     */
    public function hasRole($role): bool
    {
        return $this->role === $role;
    }

    /**
     * Check if user is wali kelas
     */
    public function isWaliKelas(): bool
    {
        return $this->role === 'guru' && !empty($this->wali_kelas);
    }

    /**
     * Check if user mengajar mapel tertentu
     */
    public function mengajarMapel($mapelId): bool
    {
        return $this->mapels()->where('mapels.id', $mapelId)->exists();
    }

    /**
     * Check if user mengajar mapel dengan kode tertentu
     */
    public function mengajarMapelByKode($kodeMapel): bool
    {
        return $this->mapels()->where('kode_mapel', $kodeMapel)->exists();
    }

    /**
     * Get available roles
     */
    public static function getAvailableRoles(): array
    {
        return ['admin', 'guru'];
    }

    // ==================== ACCESSORS ====================

    /**
     * Get formatted role name
     */
    public function getFormattedRoleAttribute(): string
    {
        return ucfirst($this->role);
    }

    /**
     * Get display name with role and mapel info
     */
    public function getDisplayNameAttribute(): string
    {
        $display = $this->name;
        
        if ($this->role === 'guru') {
            if ($this->wali_kelas) {
                $display .= " (Wali {$this->wali_kelas})";
            }
            
            // Tambahkan info mapel jika ada
            $mapelCount = $this->mapels()->count();
            if ($mapelCount > 0) {
                $display .= " | {$mapelCount} Mapel";
            }
        }
        
        return $display;
    }

    /**
     * Get kelas yang diampu jika user adalah wali kelas
     */
    public function getKelasYangDiampuAttribute()
    {
        if (!$this->wali_kelas) {
            return null;
        }
        
        return [
            'nama_kelas' => $this->wali_kelas,
            'rombel' => $this->rombel
        ];
    }

    /**
     * Get daftar mapel yang diajarkan
     */
    public function getMapelYangDiajarkanAttribute()
    {
        if (!$this->isGuru()) {
            return collect();
        }
        
        return $this->mapels()
            ->orderBy('nama_mapel')
            ->get(['mapels.id', 'mapels.nama_mapel', 'mapels.kode_mapel', 'mapels.fase']);
    }

    /**
     * Get jumlah mapel yang diajarkan
     */
    public function getJumlahMapelAttribute(): int
    {
        return $this->mapels()->count();
    }

    /**
     * Get daftar nama mapel yang diajarkan
     */
    public function getNamaMapelAttribute(): array
    {
        return $this->mapels()->pluck('nama_mapel')->toArray();
    }

    /**
     * Get informasi lengkap untuk dropdown guru
     */
    public function getGuruInfoAttribute(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'wali_kelas' => $this->wali_kelas,
            'jumlah_mapel' => $this->jumlah_mapel,
            'mapels' => $this->mapel_yang_diajarkan
        ];
    }

    // ==================== MANIPULASI DATA ====================

    /**
     * Attach mapel ke user ini
     */
    public function attachMapel($mapelId): void
    {
        if ($this->isGuru() && !$this->mengajarMapel($mapelId)) {
            $this->mapels()->attach($mapelId);
        }
    }

    /**
     * Detach mapel dari user ini
     */
    public function detachMapel($mapelId): int
    {
        return $this->mapels()->detach($mapelId);
    }

    /**
     * Sync mapel untuk user ini
     */
    public function syncMapels(array $mapelIds): array
    {
        if ($this->isGuru()) {
            return $this->mapels()->sync($mapelIds);
        }
        return [];
    }

    /**
     * Detach semua mapel dari user ini
     */
    public function detachAllMapels(): int
    {
        return $this->mapels()->detach();
    }

    /**
     * Check if user can mengajar mapel tambahan
     */
    public function canMengajarMapelTambahan($maxMapel = 5): bool
    {
        return $this->isGuru() && $this->mapels()->count() < $maxMapel;
    }

    /**
     * Get statistik mengajar guru
     */
    public function getTeachingStatistics(): array
    {
        $totalMapels = $this->mapels()->count();
        $mapelsByFase = $this->mapels()
            ->select('fase', DB::raw('count(*) as total'))
            ->groupBy('fase')
            ->pluck('total', 'fase')
            ->toArray();
        
        return [
            'total_mapels' => $totalMapels,
            'mapels_by_fase' => $mapelsByFase,
            'can_teach_more' => $this->canMengajarMapelTambahan()
        ];
    }

    /**
     * Get semua guru untuk dropdown (format sederhana)
     */
    public static function getGurusForDropdown()
    {
        return self::guru()
            ->orderBy('name')
            ->get(['id', 'name', 'email', 'wali_kelas'])
            ->map(function ($guru) {
                return [
                    'value' => $guru->id,
                    'label' => $guru->name . ($guru->wali_kelas ? " (Wali {$guru->wali_kelas})" : ''),
                    'email' => $guru->email,
                    'wali_kelas' => $guru->wali_kelas
                ];
            });
    }
}