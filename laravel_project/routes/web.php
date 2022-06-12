<?php

<<<<<<< HEAD
use App\Http\Controllers\ContactController;
=======
use Illuminate\Support\Facades\Auth;
>>>>>>> bfd36c350a70f11118a1ca26ec77745be89b82dc
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
    return view('contact');
});


Route::get('/causes' , [CausesController::class, 'index']);
Route::get("/causes/{category}", [CausesController::class , 'ShowProductCategory']);

Route::get("/search", [CausesController::class , 'search']);

Route::get("/product/{product}" , [ProductController::class , "index"]);
Route::get("/product/add/{product}" , [ProductController::class , "add"]);





// registration
Auth::routes();

<<<<<<< HEAD
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('contact',[ContactController::class]);
=======
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
>>>>>>> bfd36c350a70f11118a1ca26ec77745be89b82dc
