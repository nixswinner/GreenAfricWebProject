<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    

    protected $fillable = [
        'user_id'
    ];

    public function basket_items(){
        
        return $this->hasMany(BasketItem::class);
    }

    public function user(){
        return $this->hasOne(User::class);
    }
}
