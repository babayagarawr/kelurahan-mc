<?php

use App\Http\Controllers\KelurahanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kelurahan', [KelurahanController::class, 'index']);
Route::get('/penduduk', [KelurahanController::class, 'penduduk']);