<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/tentang-kami', 'about')->name('about');
Route::view('/produk', 'products')->name('products');
Route::view('/promo', 'promo')->name('promo');
Route::view('/testimoni', 'testimonials')->name('testimonials');
Route::view('/faq', 'faq')->name('faq');
Route::view('/kontak', 'contact')->name('contact');

Route::view('/products/byd-seal', 'products.byd-seal')->name('products.byd-seal');
Route::view('/products/byd-dolphin', 'products.byd-dolphin')->name('products.byd-dolphin');
Route::view('/products/byd-atto-3', 'products.byd-atto-3')->name('products.byd-atto-3');
Route::view('/products/byd-m6', 'products.byd-m6')->name('products.byd-m6');
