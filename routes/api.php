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
    Route::get('list','UserController@index');
    Route::post('update','UserController@update');
});

Route::resource('product','ProductController')->middleware('auth');
Route::resource('brand','BrandController')->middleware('auth');
Route::resource('sale','SaleController')->middleware('auth');
Route::resource('category','CategoryController')->middleware('auth');
Route::resource('customer','CustomerController')->middleware('auth');
Route::put('sale/add/{id}','SaleController@add')->middleware('auth');
Route::put('sale/subtract/{id}','SaleController@subtract')->middleware('auth');
Route::resource('promo','PromoController')->middleware('auth');