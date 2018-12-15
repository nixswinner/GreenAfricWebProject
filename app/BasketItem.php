<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BasketItem extends Model
{
    
    public function basket(){
        return $this->belongsTo(Basket::class);
    }

    public function product(){
        return $this->hasMany(Product::class);
    }
}
