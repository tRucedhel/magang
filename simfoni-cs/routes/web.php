<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/slip', function () {
    return view('1-slip');
})->name('slip');

Route::get('/slip2', function () {
    return view('2-slip');
})->name('slip2');

Route::get('/slip2-np', function () {
    return view('2-slip-np');
})->name('slip2-np');

Route::get('/slip3', function () {
    return view('3-slip');
})->name('slip3');

Route::get('/slip3-np', function () {
    return view('3-slip-np');
})->name('slip3-np');

Route::get('/konfirmasi', function () {
    return view('konfirmasi');
})->name('konfirmasi');

Route::get('/konfirmasi-np', function () {
    return view('konfirmasi-np');
})->name('konfirmasi-np');

Route::get('/struk', function () {
    return view('struk');
})->name('struk');

Route::get('/struk-np', function () {
    return view('struk-np');
})->name('struk-np');