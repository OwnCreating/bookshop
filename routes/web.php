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
Route::get('/cat_pdt', 'FrontController@getCategory')->name('front.category');
Route::get('/detail/{id}', 'FrontController@show')->name('front.show');
Route::get('/product/{id}/add-cart', 'FrontController@add')->name('front.add');
Route::get('/product/cart', 'FrontController@cart')->name('front.cart');

Route::get('user/register', 'Auth\RegisterController@showRegister')->name('register.show');
Route::post('user/register', 'Auth\RegisterController@register')->name('register');

Route::get('user/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('user/login', 'Auth\LoginController@showLogin')->name('login.show');
Route::post('user/login', 'Auth\LoginController@login')->name('login');


// Admin

Route::group(array('prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>'manager'), function(){
    
    // User
    Route::get('user', 'UserController@index')->name('user.index');
    Route::get('user/{id}/edit', 'UserController@edit')->name('user.edit');
    Route::post('user/{id}/update', 'UserController@update')->name('user.update');

    Route::resource('/', 'AdminController');

    // Role
    Route::resource('role', 'RoleController');

    // Product
    Route::resource('/product', 'ProductController');

    // Category
    // Route::resource('category', 'CategoryController');

    Route::post('/category', 'CategoryController@index')->name('category.index');
    Route::get('/category/create', 'CategoryController@store')->name('category.create');
    Route::post('/category/store', 'CategoryController@store')->name('category.store');
    Route::post('/category/edit', 'CategoryController@edit')->name('category.edit');
    Route::post('/category/update', 'CategoryController@update')->name('category.update');
    Route::post('/category/destroy', 'CategoryController@destroy')->name('category.destroy');

    Route::post('/cat', 'CategoryController@get')->name('cate');

});




// testing

// route::view('/index', 'layout.index');

