<?php

use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PendudukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kelurahan', [KelurahanController::class, 'index']);
Route::get('/penduduk', [PendudukController::class, 'index']);