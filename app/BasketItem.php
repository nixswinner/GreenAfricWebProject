<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BasketItem extends Model
{
 
    protected $fillable = [
        'quantity', 'total', 
        'basket_id', 'product_id'];

    public function basket(){
        return $this->belongsTo(Basket::class);
    }

    public function product(){
        return $this->hasMany(Product::class);
    }
}
