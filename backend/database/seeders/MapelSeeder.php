<?php

namespace Database\Seeders;

use App\Models\Mapel;
use Illuminate\Database\Seeder;

class MapelSeeder extends Seeder
{
    public function run()
    {
        $mapels = [
            ['nama_mapel' => 'Matematika', 'kode_mapel' => 'MTK', 'fase' => 'Fase E'],
            ['nama_mapel' => 'Bahasa Indonesia', 'kode_mapel' => 'BIND', 'fase' => 'Fase E'],
            ['nama_mapel' => 'Bahasa Inggris', 'kode_mapel' => 'BING', 'fase' => 'Fase E'],
            ['nama_mapel' => 'Ilmu Pengetahuan Alam', 'kode_mapel' => 'IPA', 'fase' => 'Fase E'],
            ['nama_mapel' => 'Ilmu Pengetahuan Sosial', 'kode_mapel' => 'IPS', 'fase' => 'Fase E'],
            ['nama_mapel' => 'Pendidikan Pancasila', 'kode_mapel' => 'PPKN', 'fase' => 'Fase E'],
            ['nama_mapel' => 'Pendidikan Jasmani', 'kode_mapel' => 'PJOK', 'fase' => 'Fase E'],
            ['nama_mapel' => 'Seni Budaya', 'kode_mapel' => 'SB', 'fase' => 'Fase E'],
        ];

        foreach ($mapels as $mapel) {
            Mapel::create($mapel);
        }
    }
}