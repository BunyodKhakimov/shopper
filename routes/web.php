<?php

use Illuminate\Support\Facades\Route;

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

/* Front Get Routes */

Route::get('/', function () {
    return view('front.home.index');
})->name('index');

Route::get('/blog-single', function () {
    return view('front.blog.single.index');
})->name('blog-single');

Route::get('/blog-list', function () {
    return view('front.blog.list.index');
})->name('blog-list');

Route::get('/cart', function () {
    return view('front.cart.index');
})->name('cart');

Route::get('/checkout', function () {
    return view('front.checkout.index');
})->name('checkout');

Route::get('/contact', function () {
    return view('front.contact.index');
})->name('contact');

Route::get('/products', function () {
    return view('front.shop.products.index');
})->name('products');

Route::get('/product-details', function () {
    return view('front.shop.product-details.index');
})->name('product-details');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
