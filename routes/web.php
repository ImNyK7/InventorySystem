<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});


Route::get('/', function () {
    return view('home', [
        "title" => "Home", 
        "role" => "Admin"
    ]);
});

Route::get('/mastercustomer', function () {
    return view('Master/Customer/mcustomer', [
        "title" => "Master Customer", 
        "role" => "Admin"
    ]);
});

Route::get('/tambahcustomer', function () {
    return view('Master/Customer/tambahcustomer', [
        "title" => "Tambah Customer", 
        "role" => "Admin"
    ]);
});


Route::get('/mastersupplier', function () {
    return view('Master/Supplier/msupplier', [
        "title" => "Master Supplier", 
        "role" => "Admin"
    ]);
});

Route::get('/tambahsupplier', function () {
    return view('Master/Supplier/tambahsupplier', [
        "title" => "Tambah Supplier", 
        "role" => "Admin"
    ]);
});


Route::get('/masterkategori', function () {
    return view('Master/Kategori/mkategori', [
        "title" => "Master Kategori", 
        "role" => "Admin"
    ]);
});

Route::get('/tambahkategori', function () {
    return view('Master/Kategori/tambahkategori', [
        "title" => "Tambah Kategori", 
        "role" => "Admin"
    ]);
});

Route::get('/stokbarang', function () {
    return view('Gudang/stokbarang', [
        "title" => "Stok Barang", 
        "role" => "Admin"
    ]);
});


Route::get('/barangmasuk', function () {
    return view('Gudang/BarangMasuk/barangmasuk', [
        "title" => "Barang Masuk", 
        "role" => "Admin"
    ]);
});

Route::get('/tambahbarangmasuk', function () {
    return view('Gudang/BarangMasuk/tambahbarangmasuk', [
        "title" => "Tambah Barang Masuk", 
        "role" => "Admin"
    ]);
});

Route::get('/barangkeluar', function () {
    return view('Gudang/BarangKeluar/barangkeluar', [
        "title" => "Barang Keluar", 
        "role" => "Admin"
    ]);
});

Route::get('/tambahbarangkeluar', function () {
    return view('Gudang/BarangKeluar/tambahbarangkeluar', [
        "title" => "Tambah Barang Keluar", 
        "role" => "Admin"
    ]);
});

// Route::get('/coba', function () {
//     return view('coba');
// });
