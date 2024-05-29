<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Kategori;
use App\Models\Supplier;
use App\Models\SatuanBrg;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\RecordBarangMasuk;
use App\Models\RecordBarangKeluar;

class RouteController extends Controller
{

    public function stokbarang()
    {
        return view('Gudang/stokbarang', [
            "title" => "Stok barang",
            "recordbarangmasuks" => RecordBarangMasuk::all()
        ]);
    }

    public function adminpage()
    {
        return view('/Admin/adminpage', [
            "title" => "Admin Page",
            "users" => User::all()
        ]);
    }
}
