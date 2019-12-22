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

Route::get('/', 'MainController@index');

Route::get('/home', 'MainController@index');

//Auth::routes();
// Authentication Routes
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.submit');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Registration Routes
Route::get('register','Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register','Auth\RegisterController@register')->name('register.submit');
// Password Reset Routes
Route::get('password/reset','Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}','Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset','Auth\ResetPasswordController@reset')->name('password.update');


//Route::get('/sidebar',function(){
//    return view('categories');
//});

Route::get('/category', 'CategoryController@getItems');
Route::get('/category/{category_id}', 'CategoryController@getItems')->name('category_id');
Route::get('/shoppingCart', 'ShoppingCartController@ShoppingCart');

//Route::get('/home', 'MainController@index')->name('home');
Route::get('/item/{item}', 'ItemsController@index')->name('item');

Route::post('/actions/add', 'ActionsController@add')->name('addItem');
Route::post('/actions/remove', 'ActionsController@remove')->name('removeItem');
Route::post('/actions/checkout', 'ActionsController@checkout')->name('checkout');

Route::get('/user', 'UserController@index')->name('user');
