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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/products','Product\ProductController');

Auth::routes();

Route::get('/home', 'HomeController@inbdex')->name('home');

Route::resource('in_shopping_carts','Product\ProductInShoppingCartController',[
    'only' => ['store','destroy']
]);

Route::get('/cart','Product\ShoppingCartController@show')->name('shopping_cart.show');
Route::get('/cart/products','Product\ShoppingCartController@products')->name('shopping_cart.products');


