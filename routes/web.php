<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FileUploudController;
use App\Http\Controllers\TestingController;
use App\Models\JobListing;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['greeting' => 'Hello']);
});

// All Jobs
Route::get('/job', function () {
    $jobs = JobListing::with('user')->latest()->simplePaginate(5);
    return view('jobs', compact('jobs'));
})->name('jobs');

// Create Job
Route::get('/job/create', function () {
    return view('create-job');
});

// Save Job
Route::post('/job', function (Request $request) {
    $request->validate([
        'job_name' => ['string', 'min:3'],
        'salary' => ['min:5']
    ]);
    JobListing::create([
        'name' => $request->job_name,
        'salary' => $request->salary,
        'user_id' => 2
    ]);
    return redirect('/job')->with('success', 'Job Saved successfully!');
});

// Edit Job
Route::get('/job/{job}/edit', function (JobListing $job) {
    return view('edit-job', compact('job'));
})->name('edit-job');

// Update Job
Route::patch('/job/{job}', function (Request $request, JobListing $job) {
    $request->validate([
        'job_name' => ['string', 'min:3'],
        'salary' => ['min:5']
    ]);
    $job->update([
        'name' => $request->job_name,
        'salary' => $request->salary,
    ]);
    return redirect('/job')->with('success', 'Job updated successfully!');
})->name('update-job');

// Delete Job
Route::delete('/job/{job}', function (JobListing $job) {
    $job->delete();
    return redirect('/job')->with('success', 'Job Deleted successfully!');
})->name('delete-job');

// Get Single Job
Route::get('/job/{job}', function (JobListing $job) {
    return view('job', ['job' => $job]);
})->name('jobs.show');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/team', function () {
    return view('teams');
});

Route::get('/add-user', [TestingController::class, 'index']);

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
// Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/contact/message', [ContactController::class, 'message'])->name('contact.message');
Route::post('/contact', [ContactController::class, 'submitContact'])->name('contact.submit');
Route::get('/file-uploud', [FileUploudController::class, 'index'])->name('file.uploud');
Route::post('/file-uploud', [FileUploudController::class, 'store'])->name('file.store');
