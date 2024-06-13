<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    public function recordbarangmasuk(){
        return $this->hasMany(RecordBarangMasuk::class);
    }

    public function recordbarangkeluar(){
        return $this->hasMany(RecordBarangKeluar::class);
    }

    public function stokbarang(){
        return $this->hasMany(StokBarang::class);
    }

    public function getRouteKeyName(){
        return 'namakat';
    }
}
