<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Kategori;
use App\Models\Supplier;
use App\Models\SatuanBrg;
use Illuminate\Http\Request;
use App\Models\RecordBarangMasuk;
use App\Models\RecordBarangKeluar;

class RouteController extends Controller
{
    public function mcustomer()
    {
        return view('Master/Customer/mcustomer', [
            "title" => "Master Customer",
            "role" => "Admin",
            "customers" => Customer::all()
        ]);
    }

    public function tambahcustomer()
    {
        return view('Master/Customer/tambahcustomer', [
            "title" => "Tambah Customer",
            "role" => "Admin"
        ]);
    }

    public function msupplier()
    {
        $supplier = Supplier::all();

        return view('Master/Supplier/msupplier', [

            "title" => "Master Supplier",
            "role" => "Admin",
            "suppliers" => $supplier
        ]);
    }

    public function tambahsupplier()
    {
        return view('Master/Supplier/tambahsupplier', [
            "title" => "Tambah Supplier",
            "role" => "Admin"
        ]);
    }
    public function mkategori()
    {
        $kategoris = Kategori::all();
        return view('Master/Kategori/mkategori', [
            "title" => "Master Kategori",
            "role" => "Admin",
            "kategoris" => $kategoris
        ]);

    }

    public function tambahkategori()
    {
        return view('Master/Kategori/tambahkategori', [
            "title" => "Tambah Kategori",
            "role" => "Admin"
        ]);
    }

    public function stokbarang()
    {
        $recordbarangmasuks = RecordBarangMasuk::all();
        return view('Gudang/stokbarang', [
            "title" => "Stok barang",
            "role" => "Admin",
            "recordbarangmasuks" => $recordbarangmasuks
        ]);
    }

    public function barangmasuk()
    {
        $recordbarangmasuks = RecordBarangMasuk::all();
        $kategoris = Kategori::all();
        $suppliers = Supplier::all();
        $satuanbrgs = SatuanBrg::all();
        return view('Gudang/BarangMasuk/barangmasuk', [
            "title" => "Barang Masuk",
            "role" => "Admin",
            "kategoris" => $kategoris,
            "suppliers" => $suppliers,
            "recordbarangmasuks" => $recordbarangmasuks,
            "satuanbrgs" => $satuanbrgs
        ]);
    }

    public function tambahbarangmasuk()
    {
        $kategoris = Kategori::all();
        $suppliers = Supplier::all();
        $satuanbrgs = SatuanBrg::all();
        return view('Gudang/BarangMasuk/tambahbarangmasuk', [
            "title" => "Tambah Barang Masuk",
            "role" => "Admin",
            "kategoris" => $kategoris,
            "suppliers" => $suppliers,
            "satuanbrgs" => $satuanbrgs
        ]);
    }

    public function barangkeluar()
    {
        $kategoris = Kategori::all();
        $customers = Customer::all();
        $satuanbrgs = SatuanBrg::all();
        $recordbarangkeluars = RecordBarangKeluar::all();
        return view('Gudang/BarangKeluar/barangkeluar', [
            "title" => "Barang Keluar",
            "role" => "Admin",
            "kategoris" => $kategoris,
            "suppliers" => $customers,
            "recordbarangkeluars" => $recordbarangkeluars,
            "satuanbrgs" => $satuanbrgs
        ]);
    }

    public function tambahbarangkeluar()
    {
        $kategoris = Kategori::all();
        $customers = Customer::all();
        $satuanbrgs = SatuanBrg::all();
        return view('Gudang/BarangKeluar/tambahbarangkeluar', [
            "title" => "Tambah Barang Keluar",
            "role" => "Admin",
            "kategoris" => $kategoris,
            "customers" => $customers,
            "satuanbrgs" => $satuanbrgs
        ]);
    }
}
