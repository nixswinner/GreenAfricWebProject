<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{


    protected $fillable = [
        'user_id','order_id','amount','transcation_id','phone_number'
    ];
    public function Order(){
        return $this->belongsTo(Order::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
