<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function cart(){
        return $this -> hasMany(Cart::class);
    }  

    public function stocks()
    {
        return $this->hasMany(Stock::class, 'id_product');
    }

    public function getRouteKeyName(){
        return 'varian';
    }
}
