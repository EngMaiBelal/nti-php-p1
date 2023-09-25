<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\ProductsController;
use App\Http\Controllers\backend\DashboardController;

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
Route::group(['prefix'=>'/dashboard', 'as'=> 'dashboard'],function(){
    Route::get('/', [DashboardController::class, 'index']);
    Route::group(['as'=>'.products.'], function(){
        Route::get('/all-product', [ProductsController::class, 'index'])->name('index');
        Route::get('/create-product', [ProductsController::class, 'create'])->name('create');
        Route::post('/store', [ProductsController::class, 'store'])->name('store');
    });
});    
