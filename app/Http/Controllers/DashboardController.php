<?php

namespace App\Http\Controllers;

use App\Models\StokBarang;
use Illuminate\Http\Request;
use App\Models\RecordBarangMasuk;
use App\Models\RecordBarangKeluar;

class DashboardController extends Controller
{
    public function index(){
        $recordbarangmasuks = RecordBarangMasuk::count();
        $recordbarangkeluars = RecordBarangKeluar::count();
        $stokbarangs = StokBarang::count();
        $title = "Home";
        $role = "Admin";
        return view("home",compact('recordbarangmasuks', 'recordbarangkeluars' , 'stokbarangs', 'title','role', ));
    }
}
