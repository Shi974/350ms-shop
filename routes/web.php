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

// BOUTIQUE
Route::get('/', 'BoutiqueController@getAllProducts', function () {
    return view('welcome');
}) -> name('boutique');


// STOCK
Route::get('/stock', 'StockController@getAllProducts',function () {
    return view('stock');
}) -> name('stock');

Route::get('/stock/new', function () {
    return view('new_product');
});

// ABOUT
Route::get('/about', function () {
    return view('about');
});