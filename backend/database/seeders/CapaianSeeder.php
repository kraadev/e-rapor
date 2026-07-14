<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Capaian;

class CapaianSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'mapel_id' => 1,
                'elemen' => 'Operasi Bilangan',
                'deskripsi' => 'Menyelesaikan operasi matematika dasar.'
            ],
            [
                'mapel_id' => 1,
                'elemen' => 'Pemahaman Konsep',
                'deskripsi' => 'Memahami konsep dasar bilangan bulat.'
            ],
            [
                'mapel_id' => 2,
                'elemen' => 'Membaca',
                'deskripsi' => 'Mampu membaca teks pendek dengan baik.'
            ],
        ];

        foreach ($data as $item) {
            Capaian::create($item);
        }
    }
}
