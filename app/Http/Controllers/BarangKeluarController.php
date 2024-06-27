<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Kategori;
use Barryvdh\DomPDF\Facade\PDF;
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
            'kodebrgklr' => 'required|string|max:255|unique:record_barang_keluars,kodebrgklr,',
            'tanggalbrgklr' => 'required|date',
            'jmlhbrgklr' => 'required|integer|min:1',
            'satuanbrg_id' => 'required|exists:satuan_brgs,id',
            'stokbarang_id' => 'required|exists:stok_barangs,id',
            'hrgjual' => 'required|numeric|min:0.01|max:999999999999.99',
            'kategori_id' => 'required|exists:kategoris,id',
            'customer_id' => 'required|exists:customers,id',
            'noseribrgklr' => 'required|array',
        ]);

        $validatedData['noseribrgklr'] = json_encode($validatedData['noseribrgklr']);

        // if (RecordBarangKeluar::where('kodebrgklr', $validatedData['kodebrgklr'])->exists()) {
        //     return redirect()->back()->withErrors(['kodebrgklr' => 'Kode barang sudah ada, silahkan buat kode baru atau gunakan fitur Edit.'])->withInput();
        // }

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
    /**
 * Update the specified resource in storage.
 */
public function update(Request $request, RecordBarangKeluar $listbarangkeluar)
{
    $validatedData = $request->validate([
        'kodebrgklr' => 'required|string|max:255|unique:record_barang_keluars,kodebrgklr,' . $listbarangkeluar->id,
        'tanggalbrgklr' => 'required|date',
        'jmlhbrgklr' => 'integer|min:1',
        'satuanbrg_id' => 'required|exists:satuan_brgs,id',
        'stokbarang_id' => 'exists:stok_barangs,id',
        'hrgjual' => 'required|numeric|min:0.01|max:999999999999.99',
        'kategori_id' => 'required|exists:kategoris,id',
        'customer_id' => 'required|exists:customers,id',
        'noseribrgklr' => 'required|array',
    ]);

    $validatedData['noseribrgklr'] = json_encode($validatedData['noseribrgklr']);

    $stokbarang = StokBarang::find($listbarangkeluar->stokbarang_id);

    $selisihJmlhbrgklr = $validatedData['jmlhbrgklr'] - $listbarangkeluar->jmlhbrgklr;

    if ($selisihJmlhbrgklr > 0) {
        $stokbarang->jmlhbrg -= $selisihJmlhbrgklr;
    } else {
        $stokbarang->jmlhbrg += abs($selisihJmlhbrgklr);
    }

    if ($stokbarang->jmlhbrg < 0) {
        return redirect()->back()->withErrors(['jmlhbrgklr' => 'Stok barang tidak mencukupi untuk pengurangan ini.'])->withInput();
    }

    $stokbarang->save();

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

    public function generatebrgklrPDF(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $query = RecordBarangKeluar::query();

        if ($startDate) {
            $query->where('tanggalbrgklr', '>=', $startDate);
        }

        if ($endDate) {
            $query->where('tanggalbrgklr', '<=', $endDate);
        }

        $recordbarangkeluars = $query->get();

        $data = [
            'title' => 'List Barang Keluar',
            'date' => date('d/m/Y'),
            'recordbarangkeluars' => $recordbarangkeluars
        ];

        $pdf = PDF::loadView('Gudang.BarangKeluar.printbarangkeluar', $data);

        return $pdf->stream("Barang Keluar List.pdf", array("Attachment" => false));
    }

    public function printSingleBarangKeluarPDF(RecordBarangKeluar $recordbarangkeluar)
    {
        $data = [
            'recordbarangkeluar' => $recordbarangkeluar,
            'title' => 'Detail Barang Keluar',
            'date' => date('d/m/Y')
        ];

        $pdf = PDF::loadView('Gudang.BarangKeluar.printsinglebarangkeluar', $data);
        return $pdf->stream("Detail_Barang_Keluar.pdf", array("Attachment" => false));
    }

}