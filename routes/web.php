<?php

use Illuminate\Support\Facades\Route;

// Pastikan urutan ini benar
Route::get('/', function () { return view('home'); });
Route::get('/service', function () { return view('service'); });
Route::get('/about', function () { return view('about'); });
Route::get('/kontak', function () { return view('kontak'); });