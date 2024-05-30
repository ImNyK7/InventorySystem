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
        return view('Gudang/BarangKeluar/barangkeluar', [
            "title" => "Barang Keluar",
            "kategoris" => Kategori::all(),
            "customers" => Customer::all(),
            "recordbarangkeluars" => RecordBarangKeluar::with(['satuanbrg', 'kategori'])->get(),
            "satuanbrgs" => SatuanBrg::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Gudang/BarangKeluar/tambahbarangkeluar', [
            "title" => "Tambah Barang Keluar",
            "kategoris" => Kategori::all(),
            "customers" => Customer::all(),
            "satuanbrgs" => SatuanBrg::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kodebrgklr' => 'required|string|max:255',
            'tanggalbrgklr' => 'required|date',
            'jmlhbrgklr' => 'required|integer',
            'satuanbrg_id' => 'required|exists:satuan_brgs,id',
            'namabrgklr' => 'required|string|max:255',
            'hrgjual' => 'required|string|max:255',
            'kategori_id' => 'required|exists:kategoris,id',
            'customer_id' => 'required|exists:customers,id',
        ]);
    
        return response()->json($validatedData);
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
