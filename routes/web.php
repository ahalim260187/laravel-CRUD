<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FileUploudController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TestingController;
use App\Models\JobListing;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['greeting' => 'Hello']);
});

//Jobs Route Grup
Route::controller(JobController::class)->group(function () {
    Route::get('/job', 'index')->name('jobs');
    Route::get('/job/create', 'create');
    Route::post('/job', 'store');
    Route::get('/job/{job}/edit', 'edit')->name('edit-job');
    Route::patch('/job/{job}', 'update')->name('update-job');
    Route::delete('/job/{job}', 'delete')->name('delete-job');
    Route::get('/job/{job}', 'show')->name('jobs.show');
});

// REGISTER NEW USER
Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

// Login User
Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/add-user', [TestingController::class, 'index']);

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
// Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/contact/message', [ContactController::class, 'message'])->name('contact.message');
Route::post('/contact', [ContactController::class, 'submitContact'])->name('contact.submit');
Route::get('/file-uploud', [FileUploudController::class, 'index'])->name('file.uploud');
Route::post('/file-uploud', [FileUploudController::class, 'store'])->name('file.store');
