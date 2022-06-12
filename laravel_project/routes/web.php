<?php
use App\Http\Controllers\IndexxController;
use App\Http\Controllers\DeliveryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CausesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DonateController;

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
// Route::get('/delivery', function () {
//     return view('delivery');
// });
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
Route::resource('delivery', DeliveryController::class);
Route::resource('donate', DonateController::class);
Route::get('/causes' , [CausesController::class, 'index']);


// registration
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
