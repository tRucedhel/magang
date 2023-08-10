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
    return view('00-Home');
})->name('home');

Route::get('/slip', function () {
    return view('01-Slip');
})->name('slip');

Route::get('/slip-p', function () {
    return view('02-Slip-P');
})->name('slip-p');

Route::get('/slip-np', function () {
    return view('02-Slip-NP');
})->name('slip-np');

Route::get('/slip-setoran-P', function () {
    return view('slip_setoran.slip-setoran-P');
})->name('slip-setoran-P');

Route::get('/slip-setoran-NP', function () {
    return view('slip_setoran.slip-setoran-NP');
})->name('slip-setoran-NP');

Route::get('/konfirmasi-setoran-P', function () {
    return view('slip_setoran.konfirmasi-setoran-P');
})->name('konfirmasi-setoran-P');

Route::get('/konfirmasi-setoran-NP', function () {
    return view('slip_setoran.konfirmasi-setoran-NP');
})->name('konfirmasi-setoran-NP');

Route::get('/struk-setoran-P', function () {
    return view('slip_setoran.struk-setoran-P');
})->name('struk-setoran-P');

Route::get('/struk-setoran-NP', function () {
    return view('slip_setoran.struk-setoran-NP');
})->name('struk-setoran-NP');

Route::get('/slip-penutupan-P', function () {
    return view('slip_penutupan.slip-penutupanT-P');
})->name('slip-penutupan-P');

Route::get('/slip-penutupan-NP', function () {
    return view('slip_penutupan.slip-penutupanT-NP');
})->name('slip-penutupan-NP');

Route::get('/konfirmasi-penutupan-P', function () {
    return view('slip_penutupan.konfirmasi-penutupanT-P');
})->name('konfirmasi-penutupan-P');

Route::get('/konfirmasi-penutupan-NP', function () {
    return view('slip_penutupan.konfirmasi-penutupanT-NP');
})->name('konfirmasi-penutupan-NP');

Route::get('/struk-penutupan-P', function () {
    return view('slip_penutupan.struk-penutupanT-P');
})->name('struk-penutupan-P');

Route::get('/struk-penutupan-NP', function () {
    return view('slip_penutupan.struk-penutupanT-NP');
})->name('struk-penutupan-NP');