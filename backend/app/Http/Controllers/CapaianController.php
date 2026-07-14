<?php

namespace App\Http\Controllers;

use App\Models\Capaian;
use Illuminate\Http\Request;

class CapaianController extends Controller
{
    public function index()
    {
        return Capaian::with(['mapel', 'rombel'])->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'mapel_id' => 'required|exists:mapels,id',
            'rombel_id' => 'required|exists:rombels,id',
            'elemen' => 'required',
            'deskripsi' => 'required'
        ]);

        return Capaian::create($request->all());
    }

    public function show(Capaian $capaian)
    {
        return $capaian->load(['mapel', 'rombel']);
    }

    public function update(Request $request, Capaian $capaian)
    {
        $capaian->update($request->all());
        return $capaian;
    }

    public function destroy(Capaian $capaian)
    {
        $capaian->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
