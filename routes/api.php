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

Route::resource('product','ProductController')->middleware('auth:api');
Route::resource('brand','BrandController')->middleware('auth:api');
Route::resource('sale','SaleController')->middleware('auth:api');
Route::resource('category','CategoryController')->middleware('auth:api');
Route::resource('customer','CustomerController')->middleware('auth:api');
