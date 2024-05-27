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
        $recordbarangmasuks = RecordBarangMasuk::with(['satuanbrg', 'kategori'])->get();
        $kategoris = Kategori::all();
        $suppliers = Supplier::all();
        $satuanbrgs = SatuanBrg::all();
        return view('Gudang/BarangMasuk/barangmasuk', [
            "title" => "Barang Masuk",
            "kategoris" => $kategoris,
            "suppliers" => $suppliers,
            "recordbarangmasuks" => $recordbarangmasuks,
            "satuanbrgs" => $satuanbrgs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
