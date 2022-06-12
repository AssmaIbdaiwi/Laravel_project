<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CausesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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
    return view('indexx');
});


Route::get('/causes' , [CausesController::class, 'index']);
Route::get("/causes/{category}", [CausesController::class , 'ShowProductCategory']);

Route::get("/search", [CausesController::class , 'search']);

Route::get("/product/{product}" , [ProductController::class , "index"]);
Route::get("/product/add/{product}" , [ProductController::class , "add"]);

// registration
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'profileUpdate'])->name('profileupdate');
