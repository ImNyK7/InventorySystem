<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Supplier;
use Barryvdh\DomPDF\Facade\Pdf;
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
        return view('Gudang/StokBarang/stokbarang', [
            "title" => "Stok barang",
            "stokbarangs" => StokBarang::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/Gudang/StokBarang/tambahstok', [
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
            'namabrg' => 'required|string|max:255|unique:stok_barangs,namabrg',
            'kategori_id' => 'required|exists:kategoris,id',
            // 'satuanbrg_id' => 'required|exists:satuan_brgs,id',
            // 'jmlhbrg' => 'required|integer|min:1',
        ]);


        $validatedData['jmlhbrg'] = 0;
        $validatedData['satuanbrg_id'] = 1;

        StokBarang::create($validatedData);
        return redirect('/stokbarang')->with('success', 'Berhasil Tambah Barang!');
    }

    /**
     * Display the specified resource.
     */
    public function show(StokBarang $stokbarang)
    {
        return view('Gudang/StokBarang/showstokbarang', [
            'stokbarang' => $stokbarang,
            'title' => 'View Stok',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StokBarang $stokbarang)
    {
        return view('Gudang/StokBarang/editstokbarang', [
            'stokbarang' => $stokbarang,
            'title' => 'Edit Stok',
            'kategoris' => Kategori::all(),
            'satuanbrgs' => SatuanBrg::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StokBarang $stokbarang)
    {
        $validatedData = $request->validate([
            'namabrg' => 'required|string|max:255|unique:stok_barangs,namabrg,'. $stokbarang->id,
            'kategori_id' => 'exists:kategoris,id',
            // 'satuanbrg_id' => 'exists:satuan_brgs,id',
            // 'jmlhbrg' => 'required|integer|min:1',
        ]);

        $stokbarang->update($validatedData);
        return redirect('stokbarang/')->with('success', 'Berhasil Edit Customer!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StokBarang $stokbarang)
    {
        $stokbarang->delete();
        return redirect('/stokbarang')->with('success', 'Berhasil Hapus Stok!');
    }

    public function generatestokPDF()
    {
        $stokbarangs = StokBarang::get();

        $data = [
            'title' => 'List Stok Barang',
            'date' => date('d/m/Y'),
            'stokbarangs' => $stokbarangs
        ];

        $pdf = Pdf::loadView('Gudang.StokBarang.printstokbarang', $data);

        return $pdf->stream("StokBarang.pdf", array("Attachment" => false));
    }
}
