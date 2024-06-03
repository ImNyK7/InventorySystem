<?php

namespace App\Models;

use App\Models\Kategori;
use App\Models\SatuanBrg;
use App\Models\RecordBarangMasuk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StokBarang extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function satuanbrg()
    {
        return $this->belongsTo(SatuanBrg::class);
    }

    public function recordbarangmasuk(){
        return $this->belongsTo(RecordBarangMasuk::class);
    }
}

