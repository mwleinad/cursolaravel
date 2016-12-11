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


Route::group(['prefix' => 'product'], function() {
    Route::get('view', ['uses' => 'ProductController@view', 'as' => 'productList']);
    Route::get('create', ['uses' => 'ProductController@create', 'as' => 'productCreate']);
    Route::post('store', ['uses' => 'ProductController@store', 'as' => 'productStore']);
    Route::get('edit/{id}', ['uses' => 'ProductController@edit', 'as' => 'productEdit']);
    Route::post('update', ['uses' => 'ProductController@update', 'as' => 'productUpdate']);
    Route::post('delete', ['uses' => 'ProductController@delete', 'as' => 'productDelete']);
});

Route::group(['prefix' => 'client'], function() {
    Route::get('view', ['uses' => 'ClientController@view', 'as' => 'clientView']);
    Route::get('create', ['uses' => 'ClientController@create', 'as' => 'clientCreate']);
    Route::post('store', ['uses' => 'ClientController@store', 'as' => 'clientStore']);
    Route::get('edit/{id}', ['uses' => 'ClientController@edit', 'as' => 'clientEdit']);
    Route::post('update', ['uses' => 'ClientController@update', 'as' => 'clientUpdate']);
    Route::post('delete', ['uses' => 'ClientController@delete', 'as' => 'clientDelete']);
});

Route::get('/', function () {
    return view('welcome');
});
