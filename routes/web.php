<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;

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
    return view('master');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/addbooks', function () {
    return view('addbooks');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});

Route::post('/login',[UserController::class,'login']);
Route::post('/register',[UserController::class,'register']);

Route::controller(BookController::class)->group(
    function(){
      Route::get("/",'index');
      Route::get("/detail/{id}", 'detail');
      Route::get("/search",'search');
      Route::post("/add_to_wishlist",'addToWishlist');
      Route::post("/add_to_cart",'addToCart');
      Route::get("/cartlist",'cartlist');
      Route::get("/wishlist",'wishlist');
      Route::get("/removecart/{id}",'removeCart');
      Route::get("/removewish/{id}",'removeWish');
      Route::get("/category/{product_id}",'category');
      Route::get("/ordernow",'orderNow');
      Route::post("/orderplace",'orderPlace');
      Route::get("/orderlist",'myOrders');
      Route::post("/added",'added');
    }
);
