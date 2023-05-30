<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StaticController;
use Illuminate\Support\Facades\Route;


Route::get('/', [StaticController::class, 'index'])->name('home');
Route::get('/about', [StaticController::class, 'about'])->name('about');
Route::get('/contact', [StaticController::class, 'contact'])->name('contact');


Route::get('customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('customers/show', [CustomerController::class, 'show'])->name('customers.show');
// Route::get('customers', [CustomerController::class, 'update'])->name('customers.index');
// Route::get('customers', [CustomerController::class, 'delete'])->name('customers.index');

