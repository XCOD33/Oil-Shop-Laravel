<?php

use App\Http\Controllers\FrontEndController;
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

Route::controller(FrontEndController::class)->group(function () {
    Route::get('/', 'index')->name('frontend.index');
    Route::get('/login', 'login')->name('frontend.login');
    Route::post('/login', 'login_post')->name('frontend.login_post');
    Route::get('/register', 'register')->name('frontend.register');
    Route::post('/register', 'register_post')->name('frontend.register_post');
    Route::post('/logout', 'logout')->name('frontend.logout');

    Route::get('/checkout', 'checkout')->name('frontend.checkout');
    Route::post('/place-order', 'place_order')->name('frontend.place_order');

    Route::post('/cart/add', 'cart_add')->name('frontend.cart.add');
    Route::get('/cart/get', 'cart_get')->name('frontend.cart.get');
    Route::get('/about', 'about')->name('frontend.about');
    Route::get('/contact', 'contact')->name('frontend.contact');
});
