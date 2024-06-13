<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Kategori;
use App\Models\SatuanBrg;
use App\Models\StokBarang;
use Illuminate\Http\Request;
use App\Models\RecordBarangKeluar;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recordbarangkeluars = RecordBarangKeluar::with(['satuanbrg', 'kategori'])->get();

        return view('Gudang/BarangKeluar/barangkeluar', [
            "title" => "Barang Keluar",
            "kategoris" => Kategori::all(),
            "customers" => Customer::all(),
            "recordbarangkeluars" => $recordbarangkeluars,
            "satuanbrgs" => SatuanBrg::all(),
            "stokbarangs" => StokBarang::all(),
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
            'kodebrgklr' => 'required|string|max:255',
            'tanggalbrgklr' => 'required|date',
            'jmlhbrgklr' => 'required|integer|min:1',
            'satuanbrg_id' => 'required|exists:satuan_brgs,id',
            'stokbarang_id' => 'required|exists:stok_barangs,id',
            'hrgjual' => 'required|numeric|min:0.01|max:999999999999.99',
            'kategori_id' => 'required|exists:kategoris,id',
            'customer_id' => 'required|exists:customers,id',
            'noseribrgklr' => 'required|array',
        ]);

        // Convert 'noseribrgklr' array to a JSON string
        $validatedData['noseribrgklr'] = json_encode($validatedData['noseribrgklr']);

        if (RecordBarangKeluar::where('kodebrgklr', $validatedData['kodebrgklr'])->exists()) {
            return redirect()->back()->withErrors(['kodebrgklr' => 'Kode barang sudah ada, silahkan buat kode baru atau gunakan fitur Edit.'])->withInput();
        }

        $stokbarang = StokBarang::find($request->stokbarang_id);
        $stokbarang->jmlhbrg -= $request->jmlhbrgklr;
        $stokbarang->save();

        RecordBarangKeluar::create($validatedData);
        return redirect('/barangkeluar/listbarangkeluar')->with('success', 'Berhasil Tambah Laporan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(RecordBarangKeluar $listbarangkeluar)
    {
        return view('Gudang/BarangKeluar/showbarangkeluar', [
            'recordbarangkeluar' => $listbarangkeluar,
            'title' => 'Detail Barang Keluar',
            "kategoris" => Kategori::all(),
            "customers" => Customer::all(),
            "satuanbrgs" => SatuanBrg::all(),
            "stokbarangs" => StokBarang::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RecordBarangKeluar $listbarangkeluar)
    {
        return view('Gudang/BarangKeluar/editbarangkeluar', [
            'recordbarangkeluar' => $listbarangkeluar,
            'title' => 'Edit Laporan Barang Keluar',
            "kategoris" => Kategori::all(),
            "customers" => Customer::all(),
            "satuanbrgs" => SatuanBrg::all(),
            "stokbarangs" => StokBarang::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RecordBarangKeluar $listbarangkeluar)
    {
        $validatedData = $request->validate([
            'kodebrgklr' => 'required|string|max:255',
            'tanggalbrgklr' => 'required|date',
            'jmlhbrgklr' => 'integer|min:1',
            'satuanbrg_id' => 'required|exists:satuan_brgs,id',
            'stokbarang_id' => 'exists:stok_barangs,id',
            'hrgjual' => 'required|numeric|min:0.01|max:999999999999.99',
            'kategori_id' => 'required|exists:kategoris,id',
            'customer_id' => 'required|exists:customers,id',
            'noseribrgklr' => 'required|array',
        ]);

        $listbarangkeluar->update($validatedData);
        return redirect('/barangkeluar/listbarangkeluar')->with('success', 'Berhasil Edit Laporan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RecordBarangKeluar $recordbarangkeluar)
    {
        $recordbarangkeluar->delete();
        return redirect('/barangkeluar/listbarangkeluar')->with('success', 'Berhasil Hapus Laporan!');
    }
}
