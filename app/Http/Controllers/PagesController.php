<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
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
    public function Orders(){
        return view('orders');
    }
}
