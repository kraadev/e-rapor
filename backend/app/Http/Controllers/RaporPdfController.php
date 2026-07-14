<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rombel;
use App\Models\Mapel;
use App\Models\Nilai;
use Barryvdh\DomPDF\Facade\Pdf;

class RaporPdfController extends Controller
{
    /**
     * CETAK PDF LEGER PER ROMBEL
     */
    public function leger($rombel_id)
    {
        // Ambil rombel beserta siswa
        $rombel = Rombel::with('siswa')->findOrFail($rombel_id);

        // Ambil semua mapel
        $mapel = Mapel::orderBy('nama')->get();

        // Rekap nilai per siswa-per-mapel
        $rekap = [];

        foreach ($rombel->siswa as $siswa) {
            $rekap[$siswa->id] = [];

            foreach ($mapel as $m) {
                $nilai = Nilai::where('siswa_id', $siswa->id)
                    ->where('mapel_id', $m->id)
                    ->avg('nilai'); // rata-rata jika ada beberapa nilai

                $rekap[$siswa->id][$m->id] = $nilai ? round($nilai, 2) : '-';
            }
        }

        // Generate PDF
        $pdf = PDF::loadView('pdf.leger', [
            'rombel' => $rombel,
            'mapel'  => $mapel,
            'rekap'  => $rekap
        ])->setPaper('A4', 'landscape');

        return $pdf->stream('leger-'.$rombel->nama.'.pdf');
    }
}
