<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');

Route::get('/product/{category_id}', 'ProductController@detail');

Route::get('/category', 'CategoryController@index');

Route::get('/category/{category_id}', 'CategoryController@show_product_category');

Route::get('/checkout', 'CheckoutController@index');

Route::get('/checkout', 'CheckoutController@index');

Route::get('/cart', 'CheckoutController@cart');

Route::get('/login', 'UserController@login');

Route::get('/register', 'UserController@register');

Route::post('/add-user', 'UserController@add_user');
Route::post('/check-login', 'UserController@check_login');
Route::get('/log-out', 'UserController@log_out');

Route::post('/add-cart-ajax','CartController@add_cart_ajax');
Route::post('/update-cart','CartController@update_cart');
Route::get('/show-cart','CartController@show_cart');
Route::get('/delete-cart','CartController@delete_cart');
Route::post('/save-checkout','CheckoutController@save_checkout');
Route::post('/price-filter','CategoryController@price_filter');

Route::post('/search','ProductController@search');