<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('dashboard');
// });
Route::get('/','PagesController@DashBoard')->name('DashBoard');
Route::get('/addproducts','PagesController@AddProducts')->name('Add Products');
Route::get('/addproductcategory','PagesController@AddProductCategory')->name('Add Product Category');
Route::get('/orders','PagesController@orders')->name('Orders');
Route::get('/productscategory','PagesController@productcategory')->name('Products Categories');
Route::get('/allproducts','PagesController@allproducts')->name('All Products');
Route::get('/payments','PagesController@payments')->name('Payments');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('products','ProductsController');

