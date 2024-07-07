<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\SalesMiddleware;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\PurchasingMiddleware;
use App\Http\Controllers\StokBarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Middleware\SalesPurchasingMiddleware;

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth', AdminMiddleware::class])->prefix('admin')->group(function () {
    Route::get('/register', [RegisterController::class, 'register'])->name('admin.register');
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/', [UserController::class, 'index']);
    Route::get('/{user:username}/edit', [UserController::class, 'edit']);
    Route::put('/{user:username}', [UserController::class, 'update']);
    Route::delete('/{user:username}', [UserController::class, 'destroy']);
});

Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware(('auth'));

Route::resource('/customer/mastercustomer', CustomerController::class)->except(['destroy'])->middleware(['auth', PurchasingMiddleware::class]);
Route::delete('/customer/mastercustomer/{customer:perusahaancust}', [CustomerController::class, 'destroy'])->middleware(['auth',PurchasingMiddleware::class]);
Route::get('customer-pdf', [CustomerController::class, 'generatecustPDF'])->middleware(['auth', PurchasingMiddleware::class]);

Route::resource('/supplier/mastersupplier', SupplierController::class)->except(['destroy'])->middleware(['auth', SalesMiddleware::class]);
Route::delete('/supplier/mastersupplier/{supplier:perusahaansupp}', [SupplierController::class, 'destroy'])->middleware(['auth', SalesMiddleware::class]);
Route::get('supplier-pdf', [SupplierController::class, 'generatesuppPDF'])->middleware(['auth', SalesMiddleware::class]);

Route::resource('/kategori/masterkategori', KategoriController::class)
    ->except(['destroy'])
    ->middleware(['auth', PurchasingMiddleware::class, SalesMiddleware::class]);
Route::delete('/kategori/masterkategori/{kategori:namakat}', [KategoriController::class, 'destroy'])
    ->middleware(['auth', PurchasingMiddleware::class, SalesMiddleware::class]);

Route::resource('/barangmasuk/listbarangmasuk', BarangMasukController::class)->except(['destroy'])->middleware(['auth', SalesMiddleware::class]);
Route::delete('/barangmasuk/listbarangmasuk/{recordbarangmasuk:kodebrgmsk}', [BarangMasukController::class, 'destroy'])->middleware(['auth', SalesMiddleware::class]);
Route::get('barangmasuk-pdf', [BarangMasukController::class, 'generatebrgmskPDF'])->middleware(['auth', SalesMiddleware::class]);
Route::get('barangmasuk/{recordbarangmasuk}/print', [BarangMasukController::class, 'printSingleBarangMasukPDF'])->middleware(['auth', SalesMiddleware::class]);

Route::resource('/barangkeluar/listbarangkeluar', BarangKeluarController::class)->except(['destroy'])->middleware(['auth', PurchasingMiddleware::class]);
Route::delete('/barangkeluar/listbarangkeluar/{recordbarangkeluar:kodebrgklr}', [BarangKeluarController::class, 'destroy'])->middleware(['auth', PurchasingMiddleware::class]);
Route::get('barangkeluar-pdf', [BarangKeluarController::class, 'generatebrgklrPDF'])->middleware(['auth', PurchasingMiddleware::class]);
Route::get('barangkeluar/{recordbarangkeluar}/print', [BarangKeluarController::class, 'printSingleBarangKeluarPDF'])->middleware(['auth', PurchasingMiddleware::class]);

Route::resource('/stokbarang', StokBarangController::class)
    ->except(['destroy'])
    ->middleware(['auth', SalesPurchasingMiddleware::class]);

Route::delete('/stokbarang/{stokbarang:namabrg}', [StokBarangController::class, 'destroy'])
    ->middleware(['auth', SalesPurchasingMiddleware::class]);
Route::get('stok-pdf', [StokBarangController::class, 'generatestokPDF'])->middleware("auth");
