<?php

namespace App\Http\Controllers;

use App\Models\Rapor;
use App\Models\Capaian;
use Illuminate\Http\Request;

class RaporController extends Controller
{
    public function index()
    {
        return Rapor::with(['siswa', 'mapel', 'capaian'])->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'mapel_id' => 'required|exists:mapels,id',
            'capaian_id' => 'required|exists:capaians,id',
            'nilai' => 'required|integer|min:0|max:100',
            'semester' => 'required',
            'tahun_ajaran' => 'required',
        ]);

        // generate predikat otomatis
        $predikat = (new Rapor)->generatePredikat($validated['nilai']);

        // Ambil deskripsi CP otomatis
        $cp = Capaian::find($validated['capaian_id']);
        $deskripsi = $cp->deskripsi;

        // Tambahkan ke validated
        $validated['predikat'] = $predikat;
        $validated['deskripsi'] = $deskripsi;

        $rapor = Rapor::create($validated);

        return response()->json($rapor, 201);
    }

    public function show(Rapor $rapor)
    {
        return $rapor->load(['siswa', 'mapel', 'capaian']);
    }

    public function update(Request $request, Rapor $rapor)
    {
        $validated = $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'mapel_id' => 'required|exists:mapels,id',
            'capaian_id' => 'required|exists:capaians,id',
            'nilai' => 'required|integer|min:0|max:100',
            'semester' => 'required',
            'tahun_ajaran' => 'required',
        ]);

        // Update predikat otomatis
        $validated['predikat'] = (new Rapor)->generatePredikat($validated['nilai']);

        // Update deskripsi CP otomatis
        $cp = Capaian::find($validated['capaian_id']);
        $validated['deskripsi'] = $cp->deskripsi;

        $rapor->update($validated);

        return response()->json($rapor);
    }

    public function destroy(Rapor $rapor)
    {
        $rapor->delete();
        return response()->json(['message' => 'Data rapor berhasil dihapus']);
    }

    public function rekap($id)
    {
        // Ambil header rapor (identitas)
        $rapor = Rapor::with([
            'siswa.rombel',
            'nilai.mapel'
        ])->findOrFail($id);

        // Format output rekap
        return response()->json([
            'rapor_id' => $rapor->id,
            'semester' => $rapor->semester,
            'tahun_ajaran' => $rapor->tahun_ajaran,
            'tanggal_rapor' => $rapor->tanggal_rapor,
            'status' => $rapor->status,

            // Identitas siswa
            'siswa' => [
                'id' => $rapor->siswa->id,
                'nis' => $rapor->siswa->nis,
                'nisn' => $rapor->siswa->nisn,
                'nama' => $rapor->siswa->nama,
                'jk' => $rapor->siswa->jk,
                'rombel' => $rapor->siswa->rombel->nama,
            ],

            // Nilai lengkap
            'nilai' => $rapor->nilai->map(function($n) {
                return [
                    'mapel' => $n->mapel->nama,
                    'nilai_angka' => $n->nilai_angka,
                    'predikat' => $n->predikat,
                    'deskripsi' => $n->deskripsi,
                ];
            }),

        ]);
    }

}
