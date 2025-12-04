<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['reka' => 'Homes']);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');

Route::get('/records', [App\Http\Controllers\RecordsController::class, 'index'])->name('records');
