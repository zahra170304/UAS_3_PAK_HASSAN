<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Models\Andhikaaa;

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

Route::get('/services', function () {
    return view('services');
});

Route::get('/service-single', function () {
    return view('service-single');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::controller(JobController::class)->group(function () {
    // index pekerjaan
    Route::get('/listkerja', 'index');


    // input pekerjaan
    Route::get('/listkerja/create', 'create');

    // menampilkan detail pekerjaan
    Route::get('/listkerja/{kerja}', 'detail');

    // menyimpan pekerjaan ke DB
    Route::post('/listkerja', 'save');

    // edit pekerjaan
    Route::get('/listkerja/{kerja}/edit', 'edit');

    // update pekerjaan
    Route::patch('/listkerja/{kerja}', 'update');

    // hapus pekerjaan
    Route::delete('/listkerja/{kerja}', 'delete');
});

Route::get('/mahasiswa', function () {
    $identitasUnik = Andhikaaa::getIdentitasAndhika();

    return view('mahasiswa.show', compact('identitasUnik'));
});


// Route::get('/post-job', [JobController::class, 'create'])->name('post-job.create');
// Route::post('/post-job', [JobController::class, 'store'])->name('post-job.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
