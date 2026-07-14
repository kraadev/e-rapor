<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Rapor;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    // GET semua nilai per rapor
    public function index(Request $request)
    {
        $raporId = $request->query('rapor_id');

        if (!$raporId) {
            return response()->json(['message' => 'rapor_id wajib dikirim'], 422);
        }

        return Nilai::where('rapor_id', $raporId)
            ->with('mapel')
            ->get();
    }

    // POST store nilai
    public function store(Request $request)
    {
        $request->validate([
            'rapor_id' => 'required|exists:rapors,id',
            'mapel_id' => 'required|exists:mapels,id',
            'nilai_angka' => 'nullable|numeric',
            'predikat' => 'nullable|string',
            'deskripsi' => 'nullable|string',
        ]);

        $nilai = Nilai::create($request->all());

        return response()->json($nilai, 201);
    }

    // GET nilai detail
    public function show(Nilai $nilai)
    {
        return $nilai->load('mapel');
    }

    // PUT update nilai
    public function update(Request $request, Nilai $nilai)
    {
        $nilai->update($request->all());
        return response()->json($nilai);
    }

    // DELETE nilai
    public function destroy(Nilai $nilai)
    {
        $nilai->delete();
        return response()->json(['message' => 'Nilai dihapus']);
    }
}
