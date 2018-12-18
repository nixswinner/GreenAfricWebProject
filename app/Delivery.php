<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    
    protected $fillable = [
        'order_id','address','county','town','other_details'
    ];

    public function Order(){
        return $this->belongsTo(Order::class);
    }
}
