<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Supplier;
use App\Models\Kategori;
use Illuminate\Http\Request;

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
        return view('Gudang/stokbarang', [
            "title" => "Stok barang",
            "role" => "Admin"
        ]);
    }

    public function barangmasuk()
    {
        return view('Gudang/BarangMasuk/barangmasuk', [
            "title" => "Barang Masuk",
            "role" => "Admin"
        ]);
    }

    public function tambahbarangmasuk()
    {
        $kategoris = Kategori::all();
        $suppliers = Supplier::all();
        return view('Gudang/BarangMasuk/tambahbarangmasuk', [
            "title" => "Tambah Barang Masuk",
            "role" => "Admin",
            "kategoris" => $kategoris,
            "suppliers" => $suppliers
        ]);
    }

    public function barangkeluar()
    {   
        return view('Gudang/BarangKeluar/barangkeluar', [
            "title" => "Barang Keluar",
            "role" => "Admin",
           
        ]);
    }

    public function tambahbarangkeluar()
    {
        $kategoris = Kategori::all();
        return view('Gudang/BarangKeluar/tambahbarangkeluar', [
            "title" => "Tambah Barang Keluar",
            "role" => "Admin",
            "kategoris" => $kategoris,
        ]);
    }
}
