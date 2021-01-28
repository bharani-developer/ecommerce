<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RazorPayController;
use App\Http\Controllers\front\CartController;
use App\Http\Controllers\front\ProductController;
use App\Http\Controllers\front\ContactController;
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
Route::get('contact', [ContactController::class, 'index']);
Route::resources(
    [
        'cart' => CartController::class,
        'products' => ProductController::class,
    ]
);
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart']);

Route::delete('remove-from-cart', [CartController::class, 'remove']);
Route::patch('update-cart', [CartController::class, 'update']);

Route::get('payment-process', [RazorPayController::class, 'process']);
Route::get('payment-success', [RazorPayController::class, 'success']);
Route::delete('clearCart', [CartController::class, 'clearCart']);

