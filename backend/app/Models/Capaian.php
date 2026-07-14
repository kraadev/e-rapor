<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Capaian extends Model
{
    protected $fillable = [
        'mapel_id',
        'rombel_id',
        'elemen',
        'deskripsi'
    ];

    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }

    public function rombel()
    {
        return $this->belongsTo(Rombel::class);
    }
}
