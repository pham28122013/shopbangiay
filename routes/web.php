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

Route::namespace('Frontend')->group(function () {
    Route::get('/','ProductController@index')->name('home.index');
    Route::get('/detail-sanpham/{id}','ProductController@product')->name('product.details');
    Route::get('/phukien/{id}','ProductController@accessory');
    Route::get('/sanpham-highlight','ProductController@highlight');
    Route::get('/sanpham-sale','ProductController@sale');
    Route::get('/giohang/{id}','CartController@addCart')->name('cart.add');
    Route::get('/listgiohang','CartController@listCart')->name('cart.list');
    Route::get('/deletegiohang/{id}','CartController@deleteCart')->name('cart.delete');
    Route::get('/destroygiohang/{id}','CartController@destroyCart')->name('cart.destroy');
    Route::get('/updategiohang/{id}/{quantity}','CartController@updateCart')->name('cart.update');
    Route::get('/thanhtoan','OrderController@create')->name('order.create');
    Route::post('/thanhtoan1','OrderController@store')->name('order.store');
    Route::post('/search','ProductController@searchData')->name('home.search');
    Route::get('/array','ProductController@array')->name('home.array');
});

Route::namespace('Auth')->group(function () {
    Route::get('/login','LoginController@getLogin')->name('users.getlogin');
    Route::post('/login','LoginController@postLogin')->name('users.postlogin');
    Route::get('/logout','LoginController@logout')->name('logout');
});    

Route::namespace('Backend')->prefix('admin')->middleware(['auth', 'admin'])->group(function() {
    Route::get('/','AdminController@index')->name('admin.index');
    Route::resource('users', 'UserController');
    Route::resource('products', 'ProductController')->only(['index', 'create', 'store', 'show']);
});