<?php

use App\Http\Controllers\StaticController;
use Illuminate\Support\Facades\Route;


Route::get('/', [StaticController::class, 'index'])->name('home');
Route::get('/about', [StaticController::class, 'about'])->name('about');


// Route::get('/about', function () {
//     return view('about');
// });
Route::get('/customers', function () {
    return view('customers');
});
Route::get('/contact', function () {
    return view('contact');
});
