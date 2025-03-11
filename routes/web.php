<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FileUploudController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\TestingController;
use App\Models\JobListing;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['greeting' => 'Hello']);
});

//Jobs Route
Route::get('/job', [JobController::class, 'index'])->name('jobs');
Route::get('/job/create', [JobController::class, 'create']);
Route::post('/job', [JobController::class, 'store']);
Route::get('/job/{job}/edit', [JobController::class, 'edit'])->name('edit-job');
Route::patch('/job/{job}', [JobController::class, 'update'])->name('update-job');
Route::delete('/job/{job}', [JobController::class, 'delete'])->name('delete-job');
Route::get('/job/{job}', [JobController::class, 'show'])->name('jobs.show');

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
