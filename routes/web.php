<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::get('/', function () {
    return view('login');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/job-listings', function () {
    return view('job-listings');
});

Route::get('/job-single', function () {
    return view('job-single');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/post-job', function () {
    return view('post-job');
});

Route::get('/post-job', [JobController::class, 'create'])->name('post-job.create');
Route::post('/post-job', [JobController::class, 'store'])->name('post-job.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
