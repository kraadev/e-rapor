<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapor extends Model
{
    use HasFactory;

    protected $fillable = [
        'siswa_id',
        'mapel_id',
        'capaian_id',
        'nilai',
        'predikat',
        'deskripsi',
        'semester',
        'tahun_ajaran',
    ];

    // RELASI
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }

    public function capaian()
    {
        return $this->belongsTo(Capaian::class);
    }

    // Logika predikat otomatis
    public function generatePredikat($nilai)
    {
        if ($nilai >= 91) return 'A';
        if ($nilai >= 81) return 'B';
        if ($nilai >= 71) return 'C';
        return 'D';
    }
}
