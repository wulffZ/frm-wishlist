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

Route::get('/login', 'UserController@indexLogin');
Route::post('/login', 'UserController@doLogin');

Route::get('/register', 'UserController@indexRegister');
Route::post('/register', 'UserController@doRegister');

Route::group(['middleware' => 'check.login'], function () {
    Route::get('/', 'HomeController@index');
    Route::get('/wishlists', 'WishlistController@index');
    Route::get('/mywishlist', 'WishlistController@mywishlistIndex');

    Route::get('/mywishlist/create', 'WishlistController@mywishlistCreateIndex');
    Route::post('/mywishlist/create', 'WishlistController@mywishlistCreatePost');

    Route::get('/mywishlist/edit', 'WishlistController@mywishlistEditIndex');
    Route::post('/mywishlist/edit', 'WishlistController@mywishlistEditPost');

    Route::get('/mywishlist/delete', 'WishlistController@mywishlistDeleteIndex');
    Route::get('/mywishlist/deletecurrent', 'WishlistController@mywishlistDeletePost');
});
