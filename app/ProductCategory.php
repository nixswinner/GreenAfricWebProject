<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductCategory extends Model
{
    protected $fillable = ['name'];
    
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
