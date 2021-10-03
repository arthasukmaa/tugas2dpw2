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

Route::get('/', function () {
    return view('index');
});

Route::get('/computer', function () {
    return view(' computer');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/laptop', function () {
    return view('laptop');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/masukan keranjang', function () {
    return view('masukan keranjang');
});
