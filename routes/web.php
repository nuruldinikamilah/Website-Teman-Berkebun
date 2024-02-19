<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomemasukController;
use App\Http\Controllers\TerampilberkebunController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\RekomendasitanamController;
use App\Http\Controllers\WebcamController;
use App\Http\Controllers\newsController;

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
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'aaa']);
Route::get('/login', [LoginController::class, 'login'])->name('login-admin');
Route::get('/homemasuk', [HomemasukController::class, 'homemasuk'])->name('homemasuk');
Route::get('/terampilberkebun', [TerampilberkebunController::class, 'terampilberkebun'])->name('terampilberkebun');
Route::get('/artikel', [ArtikelController::class, 'artikel'])->name('artikel');
Route::get('/rekomendasi', [RekomendasiController::class, 'rekomendasi'])->name('rekomendasi');
Route::get('/rekomendasitanam', [RekomendasitanamController::class, 'rekomendasitanam'])->name('rekomendasitanam');
Route::get('/webcam', [WebcamController::class, 'webcam'])->name('webcam');
Route::get('/news', [newsController::class, 'news'])->name('news');

