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


Route::get('/admin/bakery/list', 'BakeryController@index')->name('listProductAD');

Route::get('/admin/bakery/show', 'BakeryController@show');

Route::get('/admin/bakery/create', 'BakeryController@create')->name('FormCreate');

Route::post('/admin/bakery/store', 'BakeryController@store');

Route::get('/admin/bakery/edit/{id}', 'BakeryController@edit');

Route::post('/admin/bakery/update/{id}', 'BakeryController@update');

Route::delete('/admin/bakery/destroy/{id}', 'BakeryController@destroy');

//Route Client.

Route::get('/shopbanhkani/home', 'PageController@userIndex');

Route::get('/shopbanhkani/products', 'PageController@userProduct');

Route::get('/shopbanhkani/productdetail', 'PageController@userProductDetail');