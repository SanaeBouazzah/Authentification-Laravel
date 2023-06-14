<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;


Route::get('/', [StaticController::class, 'index'])->name('home');
Route::get('/about', [StaticController::class, 'about'])->name('about');
Route::get('/contact', [StaticController::class, 'contact'])->name('contact');


Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::post('/customers/store', [CustomerController::class, 'store'])->name('customers.store');



Route::delete('customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');
Route::get('customers/edit/{id}', [CustomerController::class, 'edit'])->name('customers.edit');
Route::put('customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');
Route::get('customers/{id}', [CustomerController::class, 'show'])->name('customers.show');


<<<<<<< HEAD
=======
Route::get('/upload', [UploadController::class, 'create'])->name('upload.index');
Route::post('/upload', [UploadController::class, 'store'])->name('upload.store');
>>>>>>> f4f0dce881b1782fb15e921c127f31cb45b52267

