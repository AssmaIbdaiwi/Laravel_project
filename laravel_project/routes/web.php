<?php
use App\Http\Controllers\IndexxController;
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

Route::get('/indexx', function () {
    return view('indexx');
});
Route::get('/donation', function () {
    return view('donation');
});
Route::get('/donate', function () {
    return view('donate');
});
Route::get('/delivery', function () {
    return view('delivery');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::resource('indexx', IndexxController::class);


// registration
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
