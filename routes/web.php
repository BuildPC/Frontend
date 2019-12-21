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

Auth::routes();

//Route::get('/sidebar',function(){
//    return view('categories');
//});

Route::get('/category','CategoryController@getItems');
Route::get('/category/{category_id}','CategoryController@getItems')->name('category_id');
Route::get('/shoppingCart','ShoppingCartController@ShoppingCart');

//Route::get('/home', 'MainController@index')->name('home');
Route::get('/item/{item}','ItemsController@index')->name('item');

Route::post('/actions/add','ActionsController@add')->name('addItem');

Route::get('/user','UserController@index')->name('user');
