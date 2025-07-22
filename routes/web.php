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

Route::get('shop', [App\Http\Controllers\Shop\ShopController::class, 'shop'])->name('shop');
Route::get('product', [App\Http\Controllers\Shop\ShopController::class, 'product'])->name('shop.product');
Route::get('necklace', [App\Http\Controllers\Shop\ShopController::class, 'necklace'])->name('shop.necklace');
Route::get('haram', [App\Http\Controllers\Shop\ShopController::class, 'haram'])->name('shop.haram');
Route::get('category', [App\Http\Controllers\Shop\ShopController::class, 'categories'])->name('shop.categories');
