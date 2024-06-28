<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StokBarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin/register', [RegisterController::class, 'register'])->middleware('auth')->name('admin.register');
Route::post('/admin/register', [RegisterController::class, 'store'])->middleware('auth');

Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware(('auth'));

Route::resource('/admin', UserController::class)->except(['destroy'])->middleware("auth");
Route::delete('/admin/{user:username}', [UserController::class, 'destroy'])->middleware(('auth'));

Route::resource('/customer/mastercustomer', CustomerController::class)->except(['destroy'])->middleware("auth");
Route::delete('/customer/mastercustomer/{customer:perusahaancust}', [CustomerController::class, 'destroy'])->middleware('auth');
Route::get('customer-pdf', [CustomerController::class, 'generatecustPDF'])->middleware("auth");

Route::resource('/supplier/mastersupplier', SupplierController::class)->except(['destroy'])->middleware("auth");
Route::delete('/supplier/mastersupplier/{supplier:perusahaansupp}', [SupplierController::class, 'destroy'])->middleware('auth');
Route::get('supplier-pdf', [SupplierController::class, 'generatesuppPDF'])->middleware("auth");

Route::resource('/kategori/masterkategori', KategoriController::class)->except(['destroy'])->middleware("auth");
Route::delete('/kategori/masterkategori/{kategori:namakat}', [KategoriController::class, 'destroy'])->middleware("auth");

Route::resource('/barangmasuk/listbarangmasuk', BarangMasukController::class)->except(['destroy'])->middleware("auth");
Route::delete('/barangmasuk/listbarangmasuk/{recordbarangmasuk:kodebrgmsk}', [BarangMasukController::class, 'destroy'])->middleware("auth");
Route::get('barangmasuk-pdf', [BarangMasukController::class, 'generatebrgmskPDF'])->middleware("auth");
Route::get('barangmasuk/{recordbarangmasuk}/print', [BarangMasukController::class, 'printSingleBarangMasukPDF'])->middleware("auth");

Route::resource('/barangkeluar/listbarangkeluar', BarangKeluarController::class)->except(['destroy'])->middleware("auth");
Route::delete('/barangkeluar/listbarangkeluar/{recordbarangkeluar:kodebrgklr}', [BarangKeluarController::class, 'destroy'])->middleware("auth");
Route::get('barangkeluar-pdf', [BarangKeluarController::class, 'generatebrgklrPDF'])->middleware("auth");
Route::get('barangkeluar/{recordbarangkeluar}/print', [BarangKeluarController::class, 'printSingleBarangKeluarPDF'])->middleware("auth");

Route::resource('/stokbarang', StokBarangController::class)->except(['destroy'])->middleware("auth");
Route::delete('/stokbarang/{stokbarang:namabrg}', [StokBarangController::class, 'destroy'])->middleware("auth");
Route::get('stok-pdf', [StokBarangController::class, 'generatestokPDF'])->middleware("auth");

// Route::get('/coba', function () {
//     return view('coba');
// });
