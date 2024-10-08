<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory, Notifiable;

    protected $guarded =['id'];

    protected $table = 'customers';

    public function getRouteKeyName(){
        return 'perusahaancust';
    }

    public function recordbarangkeluar(){
        return $this->hasMany(RecordBarangKeluar::class);
    }

}
