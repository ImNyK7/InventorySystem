<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Supplier;
use App\Models\SatuanBrg;
use App\Models\StokBarang;
use Illuminate\Http\Request;

class StokBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Gudang/stokbarang', [
            "title" => "Stok barang",
            "stokbarangs" => StokBarang::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/Gudang/tambahstok', [
            "title" => "Tambah Stok Barang",
            "kategoris" => Kategori::all(),
            "suppliers" => Supplier::all(),
            "satuanbrgs" => SatuanBrg::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            
            'jmlhbrg' => 'required|integer|min:1',
            'satuanbrg_id' => 'required|exists:satuan_brgs,id',
            'namabrg' => 'required|string|max:255',
            'kategori_id' => 'required|exists:kategoris,id',
        ]);

        if (StokBarang::where('namabrg', $validatedData['namabrg'])->exists()) {
            return redirect()->back()->withErrors(['namabrg' => 'Nama barang masuk sudah ada, silahkan gunakan fitur Edit.'])->withInput();
            
        }


        StokBarang::create($validatedData);
        return redirect('/stokbarang')->with('success', 'Berhasil Tambah Barang!');
    }

    /**
     * Display the specified resource.
     */
    public function show(StokBarang $stokBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StokBarang $stokBarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StokBarang $stokBarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StokBarang $stokBarang)
    {
        //
    }
}
