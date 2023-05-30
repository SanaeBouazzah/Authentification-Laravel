<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StaticController;
use Illuminate\Support\Facades\Route;


Route::get('/', [StaticController::class, 'index'])->name('home');
Route::get('/about', [StaticController::class, 'about'])->name('about');
Route::get('/contact', [StaticController::class, 'contact'])->name('contact');


Route::resource('customers', [CustomerController::class, 'index']);

