<?php

use App\Http\Controllers\BlogsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\UserProfileController;
use App\Http\Middleware\RedirectToComingSoon;
use Illuminate\Support\Facades\Request;



Route::middleware([RedirectToComingSoon::class])->group(function () {

Route::get('/stage-page', function () {
    return view('index');
})->name('home-old');

Route::get('/', function () {
    return view('coming-soon.index');
})->name('home');

Route::get('/coming-soon', function () {
    return view('coming-soon.index');
})->name('coming-soon');

// Route::get('/coming-soon', function () {
//     return Request::root();
// })->name('coming-soon');



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

Route::get('/view-blogs', function () {
    return view('dashboard.pages.blogs.index');
})->name('view.blogs');





Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', function () {
    return view('dashboard.index');
    })->name('admin');

    // Route::get('/blog-create', function () {
    //     return view('dashboard.pages.blogs.create');
    // })->name('blog.create');

    // Route::resource('/profile', UserProfileController::class);

    Route::resources([
        'profile' => UserProfileController::class,
        'blog' => BlogsController::class,
    ]);
});

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [CustomAuthController::class, 'registration'])->name('register');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
});




// Route::get('/admin/login', function () {
//     return view('dashboard.pages.auth.login');
// })->name('login');

// Route::get('/admin/register', function () {
//     return view('dashboard.pages.auth.register');
// })->name('register');


// Route::get('admin', [CustomAuthController::class, 'dashboard'])->name('dashboard');

