<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecordBarangKeluar extends Model
{
    use HasFactory;

    protected $fillable = [
        'kodebrgklr',
        'tanggalbrgklr',
        'tanggalbrgklr',
        'namabrgklr',
        'jmlhbrgklr',
        'satuanbrg_id',
        'hrgjual',
        'kategori_id',
        'customer_id',
        'noseribrgklr'
    ];
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

    public function getRouteKeyName(){
        return 'kodebrgklr';
    }
}
