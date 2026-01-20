<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'index']);
Route::get('/create', [TodoController::class, 'create']);
Route::post('/store', [TodoController::class, 'store']);
// Route untuk menandai selesai dari halaman home
Route::patch('/todos/{id}/complete', [TodoController::class, 'complete']);