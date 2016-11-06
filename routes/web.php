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
Route::get('new/index', ['uses' => 'NewController@index', 'as' => 'newIndex']);
Route::get('new/view', ['uses' => 'NewController@view', 'as' => 'newView']);

Route::get('product/view', ['uses' => 'ProductController@view', 'as' => 'productList']);

Route::get('/', function () {
    return view('welcome');
});
