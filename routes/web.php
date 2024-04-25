<?php

use Illuminate\Support\Facades\Route;

Route::get('/stage-page', function () {
    return view('index');
})->name('home-old');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/coming-soon', function () {
    return view('coming-soon.index');
})->name('coming-soon');



Route::get('/aboutus', function () {
    return view('aboutus.index');
})->name('aboutus');

Route::get('/services', function () {
    return view('services.index');
})->name('services');

Route::get('/sm-marketing', function () {
    return view('services.sm-marketing');
})->name('sm-marketing');

Route::get('/online-advertising', function () {
    return view('services.online-advertising');
})->name('online-advertising');

Route::get('/videography', function () {
    return view('services.videography');
})->name('videography');

Route::get('/strategy', function () {
    return view('services.digital-strategy');
})->name('strategy');

Route::get('/blogs', function () {
    return view('blogs.index');
})->name('blogs');

Route::get('/case-study', function () {
    return view('case-studies.index');
})->name('case-study');

Route::get('/case-open', function () {
    return view('case-studies.single');
})->name('case-open');

Route::get('/blogs-open', function () {
    return view('blogs.blog-open');
})->name('blog-open');

Route::get('/contact', function () {
    return view('contactus.index');
})->name('contactus');












Route::get('/admin', function () {
    return view('dashboard.index');
})->name('admin');

Route::get('/admin/blog', function () {
    return view('dashboard.pages.blogs.create');
})->name('blog.create');