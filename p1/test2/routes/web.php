<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\CartsController;
use App\Http\Controllers\frontend\IndexController;

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

//closure
Route::get('/', function () {
    return view('welcome');
});
// view --> route --->controller 
Route::get('/eman',[IndexController::class, 'index']);

Route::group(['prefix'=>'cart','as'=>'cart'],function(){
    Route::get('/', [CartsController::class, 'index'])->name('.index'); //cart/
    Route::get('create', [CartsController::class, 'create'])->name('.create'); //cart/create
});