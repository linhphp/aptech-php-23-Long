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
//Trang chủ
Route::get('trangchu','UserController@index')->name('users.index');

//login
Route::get('/login','UserController@getlogin')->name('users.login');
Route::post('/login','UserController@postlogin')->name('users.login');

//logout
Route::get('/logout','UserController@logout');


//user
Route::get('users','UserController@users')->name('users.users');
Route::get('/users/create','UserController@create')->name('users.create');
Route::post('users','UserController@store')->name('users.store');
Route::delete('users/{id}','UserController@destroy')->name('users.destroy');

//product
Route::get('/add-product','ProductController@add_product');
Route::get('/all-product','ProductController@all_product');
Route::post('/save-product','ProductController@store');
Route::delete('all-product/{id}','ProductController@destroy')->name('all_product.delete');
Route::get('/thongtinsp/{id}','ProductController@chitietsp');

//category_product
Route::get('/add-category','CategoryController@add_category');
Route::get('/all-category','CategoryController@all_category');
Route::post('/save-category','CategoryController@save_category')->name('save_category');
Route::delete('all-category/{id}','CategoryController@delete_category')->name('all_category.delete');

//Giỏ hàng
Route::post('/save-cart','CartController@save_cart');
Route::get('/show-cart','CartController@show_cart');
Route::get('detele-cart/{rowId}','CartController@destroy');
Route::post('/update-cart','CartController@update');

//Shopping-cart
Route::get('cart','CartController@index');

//Check-out
Route::get('check-out','UserController@check_out');

//address
Route::get('/address','ProductController@tinhthanh');
Route::get('/address/{idmatp}','ProductController@gettinhthanh');

//Thể loại 
Route::get('add-tloai','TloaiController@add_tloai');
Route::post('/add-tloai','TloaiController@save_tloai');
Route::get('/list-tloai','TloaiController@all_tloai');
Route::delete('detele-tloai/{id}','TloaiController@destroy');

//Loại tin 
Route::get('add-ltin','LtinController@add_ltin');
Route::post('add-ltin','LtinController@save_ltin');
Route::get('/list-ltin','LtinController@all_ltin');


//Tin tức 
Route::get('add-tintuc','TintucController@add_tintuc');
Route::post('/save-tintuc','TintucController@store');
Route::get('/all-tintuc','TintucController@all_tintuc');
Route::get('/baiviet/{id}','TintucController@chitiet');

//
Route::post('/ajax-add','LtinController@ajax_add');




