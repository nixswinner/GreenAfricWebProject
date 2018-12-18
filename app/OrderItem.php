<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'order_id','product_id','quantity'
    ];

    public function Order(){
        return $this->belongsTo(Order::class);
    }
    public function product(){
        return $this->hasMany(Product::class);
    }
}
