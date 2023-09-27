<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=>'dashboard'], function(){
    Route::get('all-product',[ProductController::class,'index']);
    Route::get('create-product',[ProductController::class,'create']);
    Route::post('store-product',[ProductController::class,'store']);
    Route::get('{product_id}/edit-product',[ProductController::class,'edit']);
    Route::put('update-product', [ProductController::class,'update']);
    Route::delete('delete-product/{id}', [ProductController::class,'destroy']);
});

