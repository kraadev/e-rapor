<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $fillable = [
        'rapor_id',
        'mapel_id',
        'nilai_angka',
        'predikat',
        'deskripsi',
    ];

    // Relasi ke Rapor
    public function rapor()
    {
        return $this->belongsTo(Rapor::class);
    }

    // Relasi ke Mapel
    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }
}
