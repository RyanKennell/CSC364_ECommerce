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
Auth::routes();

Route::resource('/admin/suppliers', 'SupplierController');
Route::resource('/admin/products', 'ProductController');

Route::get('/', function () {
    return view('welcome');
});

Route::view('/admin', 'pages/admin');
Route::view('/admin/createProducts', 'pages/createProducts');
Route::view('/admin/createSuppliers', 'pages/createSuppliers');

Route::get('/admin/updateSuppliers/{id}', 'SupplierController@get');
Route::get('/admin/deleteSuppliers/{id}', 'SupplierController@destroy');
Route::get('/admin/updateProducts/{id}', 'ProductController@get');
Route::get('/admin/deleteProducts/{id}', 'ProductController@destroy');

Route::get('/productCatalog', 'ProductController@catalog');
Route::get('/productDetails/{id}', 'ProductController@detail');

Route::get('/sc', 'CartItemController@index');
Route::get('/addSC/{id}', 'CartItemController@add');
Route::get('/removeSC/{id}', 'CartItemController@remove');
