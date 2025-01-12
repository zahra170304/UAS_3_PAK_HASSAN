<?php

use Illuminate\Support\Facades\Route;


Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/job-listings', function () {
    return view('job-listings');
});

Route::get('/job-single', function () {
    return view('job-single');
});

Route::get('/post-job', function () {
    return view('post-job');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/services-single', function () {
    return view('services-single');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/testimonials', function () {
    return view('testimonials');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/login', function () {
    return view('login');
});

