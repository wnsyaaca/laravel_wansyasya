<?php

use Illuminate\Support\Facades\Route;

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/', function () {
    return view('welcome');
});
