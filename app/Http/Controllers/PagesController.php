<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductCategory;
class PagesController extends Controller
{
    
    public function DashBoard(){

        $products = Product::orderBy('created_at','desc')->paginate(5);
        return view('dashboard')->with('products',$products);
    }

    public function AddProducts(){

        //$products = Product::orderBy('created_at','desc')->paginate(10);
        return view('addproducts');//->with('products',$products);
    }
    public function orders(){
        return view('orders');
    }
    public function payments(){
        return view('payments');
    }
    public function productcategory(){
        $products_category = ProductCategory::orderBy('created_at','desc')->paginate(10);
        return view('productcategory')->with('product_category',$products_category);
    }
    public function allproducts(){
        $products = Product::orderBy('created_at','desc')->paginate(5);
        return view('allproducts')->with('products',$products);
    }
}



