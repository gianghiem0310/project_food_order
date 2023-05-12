<?php

use App\Http\Controllers\SanPhamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/home', function () {
    return view('CustomerInterface/index');
})->name('home');
Route::get('shop', function () {
    return view('CustomerInterface/shop-grid');
})->name('shop'); 
Route::get('detail', function () {
    return view('CustomerInterface/shop-details');
})->name('detail'); 
Route::get('cart', function () {
    return view('CustomerInterface/shoping-cart');
})->name('cart'); 
Route::get('contact', function () {
    return view('CustomerInterface/contact');
})->name('contact'); 
Route::get('checkout', function () {
    return view('CustomerInterface/checkout');
})->name('checkout'); 
Route::get('login', function () {
    return view('LoginRegister/login');
})->name('login'); 
Route::get('register', function () {
    return view('LoginRegister/register');
})->name('register');