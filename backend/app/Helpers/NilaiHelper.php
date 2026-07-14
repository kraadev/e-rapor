<?php

namespace App\Helpers;

class NilaiHelper
{
    /**
     * Daftar semua kolom nilai yang tersedia
     */
    public static function getAllKolomNilai()
    {
        return [
            'nilai_mtk' => 'Matematika',
            'keterangan_mtk' => 'Keterangan Matematika',
            'nilai_bind' => 'Bahasa Indonesia',
            'keterangan_bind' => 'Keterangan Bahasa Indonesia',
            'nilai_bing' => 'Bahasa Inggris',
            'keterangan_bing' => 'Keterangan Bahasa Inggris',
            'nilai_ipas' => 'IPAS',
            'keterangan_ipas' => 'Keterangan IPAS',
            'nilai_ppkn' => 'PPKN',
            'keterangan_ppkn' => 'Keterangan PPKN',
            'nilai_pjok' => 'PJOK',
            'keterangan_pjok' => 'Keterangan PJOK',
            'nilai_sb' => 'Seni Budaya',
            'keterangan_sb' => 'Keterangan Seni Budaya',
            'nilai_sej' => 'Sejarah',
            'keterangan_sej' => 'Keterangan Sejarah',
            'nilai_infor' => 'Informatika',
            'keterangan_infor' => 'Keterangan Informatika',
            'nilai_mulok' => 'Muatan Lokal',
            'keterangan_mulok' => 'Keterangan Muatan Lokal',
            'nilai_pai' => 'PAI',
            'keterangan_pai' => 'Keterangan PAI',
            'nilai_pak' => 'PAK',
            'keterangan_pak' => 'Keterangan PAK',
            'nilai_pkwu' => 'PKWU',
            'keterangan_pkwu' => 'Keterangan PKWU',
            'nilai_mpp' => 'MPP',
            'keterangan_mpp' => 'Keterangan MPP',
            'nilai_mkk' => 'MKK',
            'keterangan_mkk' => 'Keterangan MKK',
            'nilai_dpk' => 'DPK',
            'keterangan_dpk' => 'Keterangan DPK',
        ];
    }

    /**
     * Rules validasi untuk nilai
     */
    public static function getNilaiValidationRules()
    {
        $rules = [];
        $kolomNilai = self::getAllKolomNilai();

        foreach ($kolomNilai as $kolom => $label) {
            if (strpos($kolom, 'nilai_') === 0) {
                $rules[$kolom] = 'nullable|numeric|min:0|max:100';
            } else {
                $rules[$kolom] = 'nullable|string|max:255';
            }
        }

        return $rules;
    }

    /**
     * Mendapatkan kode mapel dari kolom nilai
     */
    public static function getKodeMapelFromKolom($kolom)
    {
        if (strpos($kolom, 'nilai_') === 0) {
            return strtoupper(str_replace('nilai_', '', $kolom));
        }
        if (strpos($kolom, 'keterangan_') === 0) {
            return strtoupper(str_replace('keterangan_', '', $kolom));
        }
        return null;
    }

    /**
     * Mendapatkan nama mapel dari kode
     */
    public static function getNamaMapelFromKode($kode)
    {
        $mapels = [
            'MTK' => 'Matematika',
            'BIND' => 'Bahasa Indonesia',
            'BING' => 'Bahasa Inggris',
            'IPAS' => 'IPAS',
            'PPKN' => 'PPKN',
            'PJOK' => 'PJOK',
            'SB' => 'Seni Budaya',
            'SEJ' => 'Sejarah',
            'INFOR' => 'Informatika',
            'MULOK' => 'Muatan Lokal',
            'PAI' => 'PAI',
            'PAK' => 'PAK',
            'PKWU' => 'PKWU',
            'MPP' => 'MPP',
            'MKK' => 'MKK',
            'DPK' => 'DPK',
        ];

        return $mapels[strtoupper($kode)] ?? null;
    }

    /**
     * Mendapatkan predikat berdasarkan nilai
     */
    public static function getPredikat($nilai)
    {
        if ($nilai === null) return '-';
        if ($nilai >= 90) return 'Sangat Baik';
        if ($nilai >= 80) return 'Baik';
        if ($nilai >= 70) return 'Cukup';
        if ($nilai >= 60) return 'Kurang';
        return 'Sangat Kurang';
    }

    /**
     * Mendapatkan warna untuk predikat
     */
    public static function getPredikatColor($nilai)
    {
        if ($nilai === null) return 'gray';
        if ($nilai >= 90) return 'green';
        if ($nilai >= 80) return 'blue';
        if ($nilai >= 70) return 'yellow';
        if ($nilai >= 60) return 'orange';
        return 'red';
    }

    /**
     * Format nilai dengan 2 digit desimal
     */
    public static function formatNilai($nilai)
    {
        return $nilai !== null ? number_format($nilai, 2) : '-';
    }

    /**
     * Hitung rata-rata dari array nilai
     */
    public static function hitungRataRata($nilaiArray)
    {
        $validNilai = array_filter($nilaiArray, function($nilai) {
            return $nilai !== null && is_numeric($nilai);
        });
        
        if (count($validNilai) === 0) {
            return null;
        }
        
        return array_sum($validNilai) / count($validNilai);
    }
}