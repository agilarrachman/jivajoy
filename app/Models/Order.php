<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function orderItems(){
        return $this->hasMany(OrderItem::class, 'id_order');
    }

    public function customer()
    {
        return $this->belongsTo(User::class, 'id_customer');
    }

    public function getRouteKeyName(){
        return 'kode_pesanan';
    }
}
