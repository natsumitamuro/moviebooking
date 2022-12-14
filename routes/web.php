<?php

use Illuminate\Http\Client\Request;
use Illuminate\Routing\RouteRegistrar;
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


Route::get('/reservation', function () {
    return view('reservation');
})->middleware('auth');


Route::get('/register', function(){
    return view('register');
});

Route::post('/login',[App\Http\Controllers\LoginController::class,'login']);
Route::get('/login',[App\Http\Controllers\LoginController::class,'index']);

Route::get('/edit', function(){
    return view('edit');
});

Route::get('/done', function () {
    return view('done');
})->middleware('auth');

Route::get('/genre/{genreId}', function(){
    return view('genre_page');
});

Route::post('/register',[App\Http\Controllers\UserController::class,'register'])->name('register');

Route::get('/register',[App\Http\Controllers\UserController::class,'getRegister'])->name('getRegister');

Route::get('/edit/{id}',[App\Http\Controllers\UserController::class,'edit'])->name('edit');

Route::post('/edit/{id}',[App\Http\Controllers\UserController::class,'update'])->name('update');

Route::get('/logout',[App\Http\Controllers\LoginController::class,'logout']);


Route::group(['middleware'=>'auth'],function(){
    Route::get('/reservation/{id}',[\App\Http\Controllers\ReservationController::class,'reservation'])->name('getreservation');
    Route::post('/reservation',[App\Http\Controllers\ReservationController::class,'purchase'])->name('purchase');
});

Route::get('/',[App\Http\Controllers\HomeController::class,'getmovies'])->name('movies');

Route::get('/genre/{genreId}',[App\Http\Controllers\GenreController::class,'index'])->name('genre.index');

Route::get('/detail/{id}', [App\Http\Controllers\DetailController::class,'detail'])->name('detail.id');

Route::get('/scheuled_movie/{id}', [App\Http\Controllers\DetailController::class,'detail']);

Route::post('product/review', [App\Http\Controllers\DetailController::class,'review'])->name('post.review');
Route::get('/booking/{id}', [App\Http\Controllers\BookingController::class,'booking'])->name('booking');
