<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Contracts\Session\Session;

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

Route::get('/logout', function(){
    if(Session()->has('user')){
        Session()->pull('user');

    }
    return redirect('login');
});

Route::get('login', function () {
    if(Session()->has('user')){
        return redirect('product');
    }else{
        return view('login');
    }
});

Route::post('login',[UserController::class,'login']);
Route::get('product', [ProductController::class,'index']);
Route::get('detail/{id}',[ProductController::class,'detail']);
Route::get('/search',[ProductController::class,'search']);
Route::post('adToCart',[ProductController::class,'adToCart']);
Route::get('cartlist',[ProductController::class,'cartList']);
Route::get('remove/{id}',[ProductController::class,'removeCart']);
Route::get('orderNow',[ProductController::class,'orderNow']);
Route::post('placeOrder',[ProductController::class,'placeOrder']);
Route::get('myorders',[ProductController::class,'myOrders']);
Route::view('register','register');
Route::post('register',[UserController::class,'register']);
