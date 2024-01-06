<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Obat::all();
        return view('obat.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('obat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Obat::create([
            'nama_obat' => $request->nama_obat,
            'Keterangan_obat' => $request->Keterangan_obat,
            'tanggal_Expired' => $request->tanggal_Expired
        ]);

        return redirect('obat');
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
        $row = Obat::find($id);
        return view('obat.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Obat::findOrFail($id);

        $row->update([
            'nama_obat' => $request->nama_obat,
            'Keterangan_obat' => $request->Keterangan_obat,
            'tanggal_Expired' => $request->tanggal_Expired
        ]);

        return redirect('obat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Obat::findOrFail($id);

        $row->delete();

        return redirect('obat');
    }
}
