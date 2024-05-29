<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'kodecust',
        'perusahaancust',
        'kontakcust',
        'kotacust',
        'alamatcust',
        'alamat2cust',
        'notelponcust',
        'termcust',
        'limitcust',
        'desccust',
    ];
    protected $guarded =['id'];

    public function getRouteKeyName(){
        return 'perusahaancust';
    }
}
