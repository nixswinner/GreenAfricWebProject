<?php

namespace App\Http\Controllers;

use App\BasketItem;
use App\Product;
use Illuminate\Http\Request;
use Validator;

class BasketItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response= response()->json(BasketItem::get());//has paginations
        return $response;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //store 
         $validator = Validator::make($request->all(),[
            'basket_id'=>'required',
            'quantity'=>'required',
            'total'=>'required',
            'product_id'=>'required',

        ]);
        if($validator->fails()){
            return response()->json($validator->errors(),400);
        }

        //store item
        $response = BasketItem::create($request->all());
        return response($response,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BasketItems  $basketItems
     * @return \Illuminate\Http\Response
     */
    public function show($basketid)
    {
        $response = BasketItem::where('basket_id',$basketid)->get();//->with('products')->get();
       // $basketItems= BasketItem::where('basket_id',$basketid)->get();

        return response($response,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BasketItems  $basketItems
     * @return \Illuminate\Http\Response
     */
    public function edit(BasketItems $basketItems)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BasketItems  $basketItems
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BasketItems $basketItems)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BasketItems  $basketItems
     * @return \Illuminate\Http\Response
     */
    public function destroy(BasketItems $basketItems)
    {
        //
    }
}
