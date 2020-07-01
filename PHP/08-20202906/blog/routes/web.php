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

Route::get('/',function(){
    return view('1');
});

Route::get('/abc',function(){
    return view('MyController@long');
});

Route::get('product/{id}',function(){
    return view('ProductController@hienThiSanPham');
});