<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('products', 'Api\ProductController');
Route::resource('product_categories', 'Api\ProductCategoryController');
Route::resource('baskets','BasketsController');
Route::resource('baskets_items','BasketItemsController');
Route::resource('orders','OrderController');
Route::resource('order_items','OrderItemController');
Route::resource('delivery','DeliveryController');
Route::resource('payment','PaymentController');
