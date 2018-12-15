<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductCategory;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'user_id', 'product_category_id', 'unit_price', 'image'];

    public function product_category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function basket_items(){
        return $this->belongsTo(BasketItem::class);
    }
}
