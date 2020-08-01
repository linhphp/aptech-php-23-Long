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

//login
Route::get('/login','UserController@getlogin')->name('users.login');
Route::post('/login','UserController@postlogin')->name('users.login');

//user
Route::get('users','UserController@index')->name('users.index');
Route::get('/users/create','UserController@create')->name('users.create');
Route::post('users','UserController@store')->name('users.store');
Route::delete('users/{id}','UserController@destroy')->name('users.destroy');

//product
Route::get('/add-product','ProductController@add_product');
Route::get('/all-product','ProductController@all_product');
Route::post('/save-product','ProductController@save_product');

//address
Route::get('/address','ProductController@tinhthanh');
Route::get('/address/{idmatp}','ProductController@gettinhthanh');