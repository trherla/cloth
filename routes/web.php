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

Route::get('/landing', function () {
    return view('shop/landing');
});Route::get('/shop', function () {
    return view('shop/shop');
});
Route::get('/detail', function () {
    return view('shop/detail');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
