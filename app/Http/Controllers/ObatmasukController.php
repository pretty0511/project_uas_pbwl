<?php

namespace App\Http\Controllers;

use App\Models\ObatMasuk;
use Illuminate\Http\Request;

class ObatmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = ObatMasuk::all();
        return view('obatmasuk.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('obatmasuk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ObatMasuk::create([
            'nama_obat' => $request->nama_obat,
            'stok_obat' => $request->stok_obat,
            'tanggal_masuk' => $request->tanggal_masuk,
            'Keterangan_obat' => $request->Keterangan_obat
        ]);

        return redirect('obatmasuk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = ObatMasuk::find($id);
        return view('obatmasuk.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = ObatMasuk::findOrFail($id);

        $row->update([
            'nama_obat' => $request->nama_obat,
            'stok_obat' => $request->stok_obat,
            'tanggal_masuk' => $request->tanggal_masuk,
            'Keterangan_obat' => $request->Keterangan_obat
        ]);

        return redirect('obatmasuk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = ObatMasuk::findOrFail($id);

        $row->delete();

        return redirect('obatmasuk');
    }
}
