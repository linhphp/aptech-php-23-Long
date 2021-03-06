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

Route::get('users/login','UserController@getlogin')->name('users.login');
Route::post('users/login','UserController@postlogin')->name('users.login');

Route::get('users','UserController@index')->name('users.index');
Route::get('/users/create','UserController@create')->name('users.create');
Route::post('users','UserController@store')->name('users.store');
Route::delete('users/{id}','UserController@destroy')->name('users.destroy');



