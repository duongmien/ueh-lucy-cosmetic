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

Route::get('/login', 'UserController@login');

Route::get('/register', 'UserController@register');
