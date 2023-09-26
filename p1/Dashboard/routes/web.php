<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\TestController;
use App\Http\Controllers\backend\ProductsController;
use App\Http\Controllers\backend\IndexController;

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

Route::get('/my-dashboard', [IndexController::class, 'index'])->name('my-dashboard');
Route::group(['prefix'=>'/my-dashboard', 'as'=> 'my-dashboard'],function(){
    Route::group(['as'=>'.products.'], function(){
        Route::get('/all-products', [ProductsController::class, 'index'])->name('index');
        Route::get('/create-product', [ProductsController::class, 'create'])->name('create');
        Route::post('/store-product', [ProductsController::class, 'store'])->name('store');
        Route::get('/edit-product/{id}', [ProductsController::class,'edit'])->name('edit');
        Route::put('/update-product/{id}', [ProductsController::class,'update'])->name('update');
        Route::delete('/delete-product/{id}', [ProductsController::class,'destroy'])->name('destroy');
        //delete, put, patch -->post
    });
});  
// Route::get('/', function(){
//     return view('welcome');
// });
Route::get('/',[IndexController::class,'welcome']);
