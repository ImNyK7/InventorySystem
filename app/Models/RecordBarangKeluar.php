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
        'namabrklr',
        'jmlhbrklr',
        'hrgjual',
        'kategori_id',
        'customer_id'
    ];
    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
