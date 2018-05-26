<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('user')->group(function (){
    Route::post('register','UserController@register');
    Route::post('login','UserController@login');
});

Route::resource('product','ProductController');
Route::resource('brand','BrandController');
Route::resource('sale','SaleController');
Route::resource('category','CategoryController');
Route::resource('customer','CustomerController');
Route::put('sale/add/{id}','SaleController@add');
Route::put('sale/subtract/{id}','SaleController@subtract');
