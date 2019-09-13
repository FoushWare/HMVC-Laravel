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

Route::get('/',"\Customers\Http\Controllers\BackEnd\Customers@index");
Route::get('/frontend',"\Customers\Http\Controllers\FrontEnd\Customers@index");
