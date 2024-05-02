<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});

// Route::get('/login', [AuthController::class, 'login'])->name('login');
// Route::post('/login', [AuthController::class, 'loginPost'])->name('login');

Route::get('/', function () {
    return view('home');
});

Route::get('/mastercustomer', function () {
    return view('Master/Customer/mcustomer');
});

Route::get('/tambahcustomer', function () {
    return view('Master/Customer/tambahcustomer');
});


Route::get('/mastersupplier', function () {
    return view('Master/Supplier/msupplier');
});

Route::get('/tambahsupplier', function () {
    return view('Master/Supplier/tambahsupplier');
});


Route::get('/masterkategori', function () {
    return view('Master/Kategori/mkategori');
});

Route::get('/tambahkategori', function () {
    return view('Master/Kategori/tambahkategori');
});

Route::get('/stokbarang', function () {
    return view('Gudang/stokbarang');
});

Route::get('/barangmasuk', function () {
    return view('Gudang/BarangMasuk/barangmasuk');
});

Route::get('/tambahbarangmasuk', function () {
    return view('Gudang/BarangMasuk/tambahbarangmasuk');
});

Route::get('/barangkeluar', function () {
    return view('Gudang/BarangKeluar/barangkeluar');
});

Route::get('/tambahbarangkeluar', function () {
    return view('Gudang/BarangKeluar/tambahbarangkeluar');
});
