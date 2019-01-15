<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //'name', 'description', 'user_id', 'product_category_id', 'unit_price', 'image'
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'description'=>'required',
            'product_category_id'=>'required',
            'unit_price'=>'required',
            'user_id'=>'nullable',
            'image'=>'image|required'
        ]);
        //handle image
        if($request->hasFile('image'))
        {
            //get the file name 
            $filenamewithext = $request->file('image')->getClientOriginalName();
            //get file name
            $filename= pathinfo($filenamewithext,PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload 
            $path = $request->file('image')->storeAs('public/product_images',$fileNameToStore); 
      
        }
        if($validator->fails()){
            return response()->json($validator->errors(),400);
        }

        //store item
        $post = new Product();
        $post->name = $request->input('name');
        $post->description = $request->input('description');
        $post->product_category_id = $request->input('product_category_id');
        $post->unit_price = $request->input('unit_price');
        $post->image = $fileNameToStore;
        $post->save();
        //$response = Product::create($request->all());
        return redirect('/allproducts')->with('success','Product added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
