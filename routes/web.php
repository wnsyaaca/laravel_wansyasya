<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuestionController;
Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/', function () {
    return view('welcome');
});



use App\Http\Controllers\HomeController;

Route::get('/home', [HomeController::class, 'index']);


Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');
