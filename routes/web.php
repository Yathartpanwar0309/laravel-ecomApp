<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Login;

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

Route::get('/', [Home::class, 'index']);
Route::get('/cart', [Home::class, 'cart']);
Route::get('/checkout', [Home::class, 'checkout']);
Route::get('/shop', [Home::class, 'shop']);
Route::get('/product-details', [Home::class, 'singleProduct']);
Route::get('/login', [Login::class, 'index']);
Route::get('/register', [Login::class, 'register']);
Route::post('/register/auth', [Login::class, 'authRegister']);
Route::post('/login/auth', [Login::class, 'authLogin']);
Route::get('/logout', [Login::class, 'logout']);
