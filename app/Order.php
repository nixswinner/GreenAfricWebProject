<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    protected $fillable = [
        'user_id'
    ];
    
    public function user(){
        //return $this->hasOne(User::class);
    }

}
