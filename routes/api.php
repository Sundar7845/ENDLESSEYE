<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('saveproduct', [App\Http\Controllers\Api\ProductController::class, 'saveProduct'])
    ->name('api.saveproduct');
Route::post('updateproductimage', [App\Http\Controllers\Api\ProductController::class, 'updateProductImage'])
    ->name('api.updateproductimage');