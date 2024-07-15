<?php

namespace App\Http\Controllers;

use App\Models\StokOpname;
use Illuminate\Http\Request;

class StokOpnameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Gudang/StokOpname/stokopname', [
            "title" => "Stok Opname",
            "stokopnames" => StokOpname::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/Gudang/StokOpname/tambahopname', [
            "title" => "Tambah Stok Opname",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'namapenulis' => 'required|max:255',
            'tanggalopname' => 'required|date',
            'descopname' => 'required|max:255',
        ]);


        StokOpname::create($validatedData);
        return redirect('/stokopname')->with('success', 'Berhasil Tambah Opname!');
    }

    /**
     * Display the specified resource.
     */
    public function show(StokOpname $stokopname)
    {
        return view('Gudang/StokOpname/showstokopname', [
            'stokopname' => $stokopname,
            'title' => 'View Opname',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StokOpname $stokOpname)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StokOpname $stokOpname)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StokOpname $stokOpname)
    {
        //
    }
}
