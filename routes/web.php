<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\RuteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rute Tanpa MVC
Route::get('/rutetanpamvc', function () {
    return 'welcome';
});

// Rute Menggunakan VIEW
Route::get('/ruteview', function () {
    return view('ruteview');
});

// Rute  Menggunakan View & controller
Route::get('/rutecontroller',[RuteController::class, 'menampilkandata']);

// Rute  Menggunakan View & controller model 
Route::get('/rutemodel',[RuteController::class, 'menampilkandatamodel']);

Route::get('/biodata',[BiodataController::class, 'MenampilkanBiodata']);



