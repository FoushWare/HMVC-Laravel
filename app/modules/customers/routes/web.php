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

Route::namespace('Customers\Http\Controllers')->group(function (){

    Route::prefix(buildPrefix('customers','backend'))->namespace('BackEnd')->group(function (){
        Route::get('all','Customers@index');
//        dd("backend");
    });

    Route::prefix(buildPrefix('customers','frontend'))->namespace('FrontEnd')->group(function (){
        Route::get('all','Customers@index');
    });


});
