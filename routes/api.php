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

Route::post('user/register','UserController@register')->middleware('auth:api');
Route::post('user/login','UserController@login');
Route::get('user/list','UserController@index')->middleware('auth:api');
Route::post('user/update','UserController@update')->middleware('auth:api');
Route::resource('product','ProductController')->middleware('auth:api');
Route::resource('brand','BrandController')->middleware('auth:api');
Route::resource('sale','SaleController')->middleware('auth:api');
Route::resource('category','CategoryController')->middleware('auth:api');
Route::resource('customer','CustomerController')->middleware('auth:api');
Route::put('sale/add/{id}','SaleController@add')->middleware('auth:api');
Route::put('sale/subtract/{id}','SaleController@subtract')->middleware('auth:api');
Route::resource('promo','PromoController')->middleware('auth:api');
Route::get('order','OrderController@index')->middleware('auth:api');
Route::get('dashboard','ProductController@dashboard')->middleware('auth:api');