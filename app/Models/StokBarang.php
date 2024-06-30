<?php

namespace App\Models;

use App\Models\Kategori;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StokBarang extends Model
{
    use HasFactory;

    //protected $fillable = ['satuan_brg_id'];
    protected $guarded = ['id'];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
    public function satuanbrg()
    {
        return $this->belongsTo(SatuanBrg::class);
    }

    public function recordbarangmasuk(){
        return $this->hasMany(RecordBarangMasuk::class, 'stokbarang_id');
    }

    public function getRouteKeyName(){
        return 'namabrg';
    }
}
