<?php

namespace App\Models;

use App\Models\StokBarang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SatuanBrg extends Model
{
    use HasFactory;

    protected $fillable = ['namasatuan'];

    protected $guarded = ['id'];

    public function recordbarangmasuk(){
        return $this->hasMany(RecordBarangMasuk::class);
    }
    public function recordbarangkeluar(){
        return $this->hasMany(RecordBarangKeluar::class);
    }

    public function stokbarang(){
        return $this->hasMany(StokBarang::class);
    }
}
