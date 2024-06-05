<?php

use App\Models\StokBarang;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StokBarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;

Route::get('/login', [LoginController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin/register', [RegisterController::class, 'register'])->middleware('auth')->name('admin.register');
Route::post('/admin/register', [RegisterController::class, 'store']);

Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware(('auth'));
Route::get('/admin', [RouteController::class, 'adminpage'])->name('adminpage')->middleware(('auth'));

Route::resource('/customer/mastercustomer', CustomerController::class)->except(['destroy', 'edit', 'update'])->middleware("auth");
Route::delete('/customer/mastercustomer/{customer:perusahaancust}', [CustomerController::class, 'destroy'])->middleware('auth');

Route::resource('/supplier/mastersupplier', SupplierController::class)->except(['destroy', 'edit', 'update'])->middleware("auth");
Route::delete('/supplier/mastersupplier/{supplier:perusahaansupp}', [SupplierController::class, 'destroy'])->middleware('auth');

Route::resource('/kategori/masterkategori', KategoriController::class)->except(['destroy', 'edit', 'update'])->middleware("auth");
Route::delete('/kategori/masterkategori/{kategori:namakat}', [KategoriController::class, 'destroy'])->middleware("auth");

Route::resource('/barangmasuk/listbarangmasuk', BarangMasukController::class)->except(['destroy', 'edit', 'update'])->middleware("auth");
Route::delete('/barangmasuk/listbarangmasuk/{recordbarangmasuk:kodebrgmsk}', [BarangMasukController::class, 'destroy'])->middleware("auth");

Route::resource('/barangkeluar/listbarangkeluar', BarangKeluarController::class)->except(['destroy', 'edit', 'update'])->middleware("auth");
Route::delete('/barangkeluar/listbarangkeluar/{listbarangkeluar:kodebrgklr}', [BarangKeluarController::class, 'destroy'])->middleware("auth");

Route::resource('/stokbarang', StokBarangController::class)->except(['destroy', 'edit', 'update'])->middleware("auth");
Route::delete('/stokbarang/{stokbarang:namabrg}', [StokBarangController::class, 'destroy'])->middleware("auth");

// Route::get('/coba', function () {
//     return view('coba');
// });
