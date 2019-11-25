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

Route::get('/', 'ProductController@welcome')->name('home');
Route::get('/product/{product}', 'ProductController@detail')->name('product');
Route::get('/addToCart/{product}', 'ProductController@addToCart')->name('cart.add');
Route::get('/show/cart', 'CartController@show')->name('cart.show');