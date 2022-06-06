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

Route::get('/', function () {
    return view('welcome');
});

Route::view('home','home');



// PRODUCT ADD
Route::get('add', 'ProductController@add');
Route::post('add', 'ProductController@addProduct');

//SHOW PRODUCT LIST
Route::get('product-info', 'ProductController@productInfo');


// PLACE ORDER
Route::view('place-order','order');















