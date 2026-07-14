<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rombel;

class RombelSeeder extends Seeder
{
    public function run(): void
    {
        $rombels = [
            [
                'wali_kelas' => 'Pak Ahmad',
                'nama_kelas' => 'X RPL 1',
                'jurusan' => 'Rekayasa Perangkat Lunak',
                'tingkat' => 'X'
            ],
            [
                'wali_kelas' => 'Bu Siti',
                'nama_kelas' => 'X RPL 2',
                'jurusan' => 'Rekayasa Perangkat Lunak',
                'tingkat' => 'X'
            ],
            [
                'wali_kelas' => 'Pak Budi',
                'nama_kelas' => 'XI RPL 1',
                'jurusan' => 'Rekayasa Perangkat Lunak',
                'tingkat' => 'XI'
            ],
            [
                'wali_kelas' => 'Bu Rina',
                'nama_kelas' => 'X AKM 1',
                'jurusan' => 'Akuntansi',
                'tingkat' => 'X'
            ],
            [
                'wali_kelas' => 'Pak Dedi',
                'nama_kelas' => 'X DKV 1',
                'jurusan' => 'Desain Komunikasi Visual',
                'tingkat' => 'X'
            ]
        ];

        foreach ($rombels as $rombel) {
            Rombel::create($rombel);
        }
    }
}
