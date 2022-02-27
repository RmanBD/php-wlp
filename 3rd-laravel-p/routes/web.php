<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeContrller;
use App\Http\Controllers\FullNameController;

Route::get('/', [HomeContrller::class, 'index'])->name('home');
Route::get('/fn', [HomeContrller::class, 'fullName']);
Route::get('/calculator', [HomeContrller::class, 'calculator'])->name('calculator');
Route::get('/get-full-name', [FullNameController::class, 'getFullName']);
