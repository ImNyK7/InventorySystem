<?php

namespace App\Models;

use App\Models\StokBarang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RecordBarangKeluar extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'noseribrgklr' => 'array',
    ];    

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function satuanbrg()
    {
        return $this->belongsTo(SatuanBrg::class);
    }

    public function stokbarang()
    {
        return $this->belongsTo(StokBarang::class);
    }

    public function getRouteKeyName(){
        return 'kodebrgklr';
    }
}
