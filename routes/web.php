<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/contact/message', [ContactController::class, 'message'])->name('contact.message');
Route::post('/contact', [ContactController::class, 'submitContact'])->name('contact.submit');
