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

// Route::get('/', function () {
//     return view('front.index');
// });

// Front

Route::get('/', 'FrontController@index')->name('front.index');
Route::get('/detail/{id}', 'FrontController@show')->name('front.show');

// Admin
// Product

Route::resource('/product', 'ProductController');
