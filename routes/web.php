<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerklien;

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

Route::get('/', function () {
    return view('homepage');
});

Route::get('/client', function () {
    return view('client');
});
Route::get('/addclient', function () {
    return view('addclient');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});


// menampilkan
Route::get('/client',[controllerklien::class, 'index']);

// menyimpan
Route::post('/addclient/store',[controllerklien::class,'store']);