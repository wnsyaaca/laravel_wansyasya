<?php

use Illuminate\Support\Facades\Route;

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/', function () {
    return view('welcome');
});



use App\Http\Controllers\HomeController;

Route::get('/home', [HomeController::class, 'index']);

