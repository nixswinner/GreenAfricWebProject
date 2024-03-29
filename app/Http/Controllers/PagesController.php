<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductCategory;
use App\Order;
use App\OrderItems;
use Illuminate\Support\Facades\DB;
class PagesController extends Controller
{
    
    public function DashBoard(){

        $products = Product::orderBy('created_at','desc')->paginate(5);
        return view('dashboard')->with('products',$products);
    }

    public function AddProducts(){

        //$products = Product::orderBy('created_at','desc')->paginate(10);
        return view('addproducts')->with('success','Add Product success');
    }
    //AddProductCategory
    public function AddProductCategory(){

        //$products = Product::orderBy('created_at','desc')->paginate(10);
        return view('addproductcatgory')->with('success','Product category added successfully');
    }
    public function orders(){
        $orders = Order::orderBy('created_at','desc')->paginate(5);
        return view('orders')->with('orders',$orders);
    }
    public function orderItems($order_id){
        $orderitems = DB::table('order_items')
        ->join('products','products.id','order_items.product_id')
        ->where('order_id',$order_id)
        ->get();
        $data = array(
            'orderId' =>$order_id,
            'data'=> $orderitems
        );
        return view('orderitems')->with($data);
       
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



