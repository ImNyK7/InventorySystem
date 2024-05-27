<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Kategori;
use App\Models\SatuanBrg;
use Illuminate\Http\Request;
use App\Models\RecordBarangKeluar;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoris = Kategori::all();
        $customers = Customer::all();
        $satuanbrgs = SatuanBrg::all();
        $recordbarangkeluars = RecordBarangKeluar::with(['satuanbrg', 'kategori'])->get();
        return view('Gudang/BarangKeluar/barangkeluar', [
            "title" => "Barang Keluar",
            "kategoris" => $kategoris,
            "suppliers" => $customers,
            "recordbarangkeluars" => $recordbarangkeluars,
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
    public function show(RecordBarangKeluar $listbarangkeluar)
    {
        return view('Gudang/BarangKeluar/showbarangkeluar',[
            'recordbarangkeluar' => $listbarangkeluar,
            'title' => 'Barang Masuk'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RecordBarangKeluar $recordBarangKeluar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RecordBarangKeluar $recordBarangKeluar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RecordBarangKeluar $recordBarangKeluar)
    {
        //
    }
}
