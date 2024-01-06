<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Pasien;
use App\Models\transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = transaksi::all();
        return view('transaksi.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pasien = Pasien::all();
        $obat = Obat::all();
        return view('transaksi.create', compact('pasien', 'obat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        transaksi::create([
            'pas_id' => $request->pas_id,
            'obat_id' => $request->obat_id,
            'jumlah_transaksi' => $request->jumlah_transaksi
        ]);

        return redirect('transaksi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = transaksi::find($id);
        $pasien = Pasien::all();
        $obat = Obat::all();
        return view('transaksi.edit', compact('row', 'pasien', 'obat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = transaksi::findOrFail($id);

        $row->update([
            'pas_id' => $request->pas_id,
            'obat_id' => $request->obat_id,
            'jumlah_transaksi' => $request->jumlah_transaksi
        ]);

        return redirect('transaksi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = transaksi::findOrFail($id);

        $row->delete();

        return redirect('transaksi');
    }
}
