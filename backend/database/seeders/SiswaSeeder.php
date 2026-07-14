<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {
        $siswas = [
            // Rombel 1: X RPL 1
            [
                'nis' => '1001',
                'nisn' => '1234567890',
                'nama' => 'Budi Santoso',
                'jk' => 'L',
                'rombel_id' => 1,
                'status' => 'aktif'
            ],
            [
                'nis' => '1002',
                'nisn' => '2234567890',
                'nama' => 'Siti Aminah',
                'jk' => 'P',
                'rombel_id' => 1,
                'status' => 'aktif'
            ],
            [
                'nis' => '1003',
                'nisn' => '3234567890',
                'nama' => 'Ahmad Rahman',
                'jk' => 'L',
                'rombel_id' => 1,
                'status' => 'aktif'
            ],

            // Rombel 2: X RPL 2
            [
                'nis' => '2001',
                'nisn' => '4234567890',
                'nama' => 'Andi Saputra',
                'jk' => 'L',
                'rombel_id' => 2,
                'status' => 'aktif'
            ],
            [
                'nis' => '2002',
                'nisn' => '5234567890',
                'nama' => 'Maya Sari',
                'jk' => 'P',
                'rombel_id' => 2,
                'status' => 'aktif'
            ],

            // Rombel 3: XI RPL 1
            [
                'nis' => '3001',
                'nisn' => '6234567890',
                'nama' => 'Rudi Hartono',
                'jk' => 'L',
                'rombel_id' => 3,
                'status' => 'aktif'
            ],
            [
                'nis' => '3002',
                'nisn' => '7234567890',
                'nama' => 'Nina Kurnia',
                'jk' => 'P',
                'rombel_id' => 3,
                'status' => 'aktif'
            ],

            // Rombel 4: X AKM 1
            [
                'nis' => '4001',
                'nisn' => '8234567890',
                'nama' => 'Dedi Setiawan',
                'jk' => 'L',
                'rombel_id' => 4,
                'status' => 'aktif'
            ],
            [
                'nis' => '4002',
                'nisn' => '9234567890',
                'nama' => 'Lina Marlina',
                'jk' => 'P',
                'rombel_id' => 4,
                'status' => 'aktif'
            ],

            // Rombel 5: X DKV 1
            [
                'nis' => '5001',
                'nisn' => '1334567890',
                'nama' => 'Fajar Nugroho',
                'jk' => 'L',
                'rombel_id' => 5,
                'status' => 'aktif'
            ],
            [
                'nis' => '5002',
                'nisn' => '1434567890',
                'nama' => 'Putri Ayu',
                'jk' => 'P',
                'rombel_id' => 5,
                'status' => 'aktif'
            ],
        ];

        foreach ($siswas as $s) {
            Siswa::create($s);
        }
    }
}
