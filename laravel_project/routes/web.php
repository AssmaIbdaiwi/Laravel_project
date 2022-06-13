<?php
use App\Http\Controllers\IndexxController;
use App\Http\Controllers\DeliveryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CausesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AddProfileController;

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


// Route::get('/indexx', function () {
//     return view('indexx');

// Route::get('/', function () {
//     return view('contact');
// });
Route::get('/donation', function () {
    return view('donation');
});
// Route::get('/donate', function () {
//     return view('donate');
// });
// Route::get('/delivery', function () {
//     return view('delivery');
// });
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/profile', function () {
//     return view('profile');
// });

Route::resource('indexx', IndexxController::class);
Route::resource('delivery', DeliveryController::class);
// Route::resource('donate', DonateController::class);
Route::resource('contact',ContactController::class);
Route::resource('profile',ProfileController::class);
Route::resource('addprofile',AddProfileController::class);

Route::get('/causes' , [CausesController::class, 'index']);
Route::get("/causes/{category}", [CausesController::class , 'ShowProductCategory']);

Route::get("/search", [CausesController::class , 'search']);

Route::get("/product/{product}" , [ProductController::class , "index"]);
Route::get("/product/add/{product}" , [ProductController::class , "add"]);
route::get('/profile/requests' , [ProfileController::class , 'show']);




// registration
Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


