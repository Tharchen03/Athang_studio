<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AthangShortsController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SeriesController;

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

Route::redirect('/', '/home');

// Route::get('/home', function () {
//     return view('home');
// });
Route::get('/home', [AthangShortsController::class, 'home'])->name('home');


Route::get('/details', function () {
    return view('details');
});
// Route::get('/adver', function () {
//     return view('adver');
// });
Route::get('/adver', [SeriesController::class,  'trial'])->name('trial');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/trial', function () {
//     return view('trial');
// });
Route::get('/trial', [AthangShortsController::class, 'trial'])->name('trial');


Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/footer', function () {
    return view('footer');
});

// Route::get('/video', function () {
//     return view('video');
// });
Route::get('/video', [AthangShortsController::class, 'trial'])->name('trial');

// Route::redirect('/', '/home');
// Auth::routes();
// Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');


// Auth::routes();

// Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
// Route::resource('shorts',AthangShortsController::class);

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
    Route::resource('shorts', AthangShortsController::class);
});

Route::resource('series', SeriesController::class);

// Route::get('/', [HomeController::class, 'home'])->name('home');


