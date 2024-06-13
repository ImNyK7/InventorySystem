<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Supplier;
use App\Models\SatuanBrg;
use Illuminate\Http\Request;
use App\Models\RecordBarangMasuk;
use App\Models\StokBarang;

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
            "satuanbrgs" => SatuanBrg::all(),
            "stokbarangs" => StokBarang::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kodebrgmsk' => 'required|string|max:255|unique:record_barang_masuks,kodebrgmsk',
            'tanggalbrgmsk' => 'required|date',
            'jmlhbrgmsk' => 'required|integer|min:1',
            'satuanbrg_id' => 'required|exists:satuan_brgs,id',
            'stokbarang_id' => 'required|exists:stok_barangs,id',
            'hrgbeli' => 'required|numeric|min:0.01|max:999999999999.99',
            'kategori_id' => 'required|exists:kategoris,id',
            'supplier_id' => 'required|exists:suppliers,id',
        ]);

        if (RecordBarangMasuk::where('kodebrgmsk', $validatedData['kodebrgmsk'])->exists()) {
            return redirect()->back()->withErrors(['kodebrgmsk' => 'Kode barang masuk sudah ada, silahkan buat kode baru atau gunakan fitur Edit.'])->withInput();
        }
        RecordBarangMasuk::create($validatedData);
        //dd("aaaa");
        return redirect('/barangmasuk/listbarangmasuk')->with('success', 'Berhasil Tambah Laporan!');
    }


    /**
     * Display the specified resource.
     */
    public function show(RecordBarangMasuk $listbarangmasuk)
    {
        return view('Gudang/BarangMasuk/showbarangmasuk', [
            'recordbarangmasuk' => $listbarangmasuk,
            'title' => 'Detail Barang Masuk',
            "kategoris" => Kategori::all(),
            "suppliers" => Supplier::all(),
            "satuanbrgs" => SatuanBrg::all(),
            "stokbarangs" => StokBarang::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RecordBarangMasuk $listbarangmasuk)
    {

        return view('Gudang/BarangMasuk/editbarangmasuk', [
            'recordbarangmasuk' => $listbarangmasuk,
            'title' => 'Edit Laporan Barang Masuk',
            "kategoris" => Kategori::all(),
            "suppliers" => Supplier::all(),
            "satuanbrgs" => SatuanBrg::all(),
            "stokbarangs" => StokBarang::all(),
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RecordBarangMasuk $listbarangmasuk)
    {
        $validatedData = $request->validate([
            'kodebrgmsk' => 'required|string|max:255',
            'tanggalbrgmsk' => 'required|date',
            'jmlhbrgmsk' => 'integer|min:1',
            'satuanbrg_id' => 'required|exists:satuan_brgs,id',
            'stokbarang_id' => 'exists:stok_barangs,id',
            'hrgbeli' => 'required|numeric|min:0.01|max:999999999999.99',
            'kategori_id' => 'required|exists:kategoris,id',
            'supplier_id' => 'required|exists:suppliers,id',
        ]);

        $listbarangmasuk->update($validatedData);
        return redirect('/barangmasuk/listbarangmasuk')->with('success', 'Berhasil Edit Laporan!');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RecordBarangMasuk $recordbarangmasuk)
    {
        $recordbarangmasuk->delete();
        return redirect('/barangmasuk/listbarangmasuk')->with('success', 'Berhasil Hapus Laporan!');
    }
}
