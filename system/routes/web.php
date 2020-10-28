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
    return view('welcome');
});
Route::get('/dasbhoard', function () {
    return view('dasbhoard');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/promo', function () {
    return view('promo');
});
Route::get('/kategory', function () {
    return view('kategory');
});
Route::get('/produk', function () {
    return view('produk');
});
