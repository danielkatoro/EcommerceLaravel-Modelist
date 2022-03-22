<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Gloudemans\Shoppingcart\Facades\Cart;
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

Route::name('ecommerce')->get('/', function () {
    return view('welcome');
});

//Products routes
Route::name('products.index')->get('/boutique',[ProductController::class,'index']);
Route::name('products.show')->get('/boutique/{slug}',[ProductController::class,'show']);

//Cart routes
Route::name('cart.index')->get('/panier',[CartController::class,'index']);
Route::name('cart.store')->post('boutique/panier/ajouter',[CartController::class,'store']);
Route::name('cart.destroy')->get('/destroy',function(){
    Cart::destroy();
});
Route::name('cart.delete')->delete('/panier/{rowId}',[CartController::class, 'delete']);

//Checkout routes
Route::name('checkout.index')->get('/checkout',[ChekoutController::class,'index']);



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
