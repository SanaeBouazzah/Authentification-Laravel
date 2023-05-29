<?php

use App\Http\Controllers\StaticController;
use Illuminate\Support\Facades\Route;


Route::get('/', [StaticController::class, 'index'])->name('home');
Route::get('/about', [StaticController::class, 'about'])->name('about');
Route::get('/customers', [StaticController::class, 'customers'])->name('customers');
Route::get('/contact', [StaticController::class, 'contact'])->name('contact');

