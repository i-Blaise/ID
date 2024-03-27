<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/aboutus', function () {
    return view('aboutus.index');
})->name('aboutus');

Route::get('/services', function () {
    return view('services.index');
})->name('services');

Route::get('/sm-marketing', function () {
    return view('services.sm-marketing');
})->name('sm-marketing');

Route::get('/blogs', function () {
    return view('blogs.index');
})->name('blogs');

Route::get('/blogs-open', function () {
    return view('blogs.blog-open');
})->name('blog-open');

Route::get('/contact', function () {
    return view('contactus.index');
})->name('contactus');
