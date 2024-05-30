<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Supplier;
use App\Models\SatuanBrg;
use Illuminate\Http\Request;
use App\Models\RecordBarangMasuk;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Gudang/BarangMasuk/barangmasuk', [
            "title" => "Barang Masuk",
            "kategoris" => Kategori::all(),
            "suppliers" => Supplier::all(),
            "recordbarangmasuks" => RecordBarangMasuk::with(['satuanbrg', 'kategori'])->get(),
            "satuanbrgs" => SatuanBrg::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Gudang/BarangMasuk/tambahbarangmasuk', [
            "title" => "Tambah Barang Masuk",
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
        'kodebrgmsk' => 'required|string|max:255',
        'tanggalbrgmsk' => 'required|date',
        'jmlhbrgmsk' => 'required|integer',
        'satuanbrg_id' => 'required|exists:satuan_brgs,id',
        'namabrgmsk' => 'required|string|max:255',
        'hrgbeli' => 'required|string|max:255',
        'kategori_id' => 'required|exists:kategoris,id',
        'supplier_id' => 'required|exists:suppliers,id',
    ]);

    return response()->json($validatedData);
}


    /**
     * Display the specified resource.
     */
    public function show(RecordBarangMasuk $listbarangmasuk)
    {
        return view('Gudang/BarangMasuk/showbarangmasuk',[
            'recordbarangmasuk' => $listbarangmasuk,
            'title' => 'Barang Masuk'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RecordBarangMasuk $recordBarangMasuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RecordBarangMasuk $recordBarangMasuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RecordBarangMasuk $recordBarangMasuk)
    {
        //
    }
}
