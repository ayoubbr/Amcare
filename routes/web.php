<?php

use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ZoneController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [HomeController::class, 'post'])->name('post');
Route::get('/blog/category/{slug}', [HomeController::class, 'category'])->name('blog.category');


Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/events/{slug}', [HomeController::class, 'event'])->name('event');

Route::get('/admin-access', [AuthController::class, 'accessForm'])->name('admin.access');
Route::post('/admin-access', [AuthController::class, 'verifyAccessCode'])->name('admin.verify.access');
Route::get('/admin-login', [AuthController::class, 'loginForm'])->name('admin.login.form');
Route::post('/admin-login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


require __DIR__ . '/auth.php';

// Route::get('admin', [DashboardController::class, 'index'])->name('admin');

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('categories', CategoryController::class);

    Route::resource('blog', BlogPostController::class);
    Route::patch('blog/{post}/toggle-publish', [BlogPostController::class, 'togglePublish'])->name('blog.toggle-publish');
    Route::get('blog/{post}/preview', [BlogPostController::class, 'preview'])->name('blog.preview');

    Route::resource('events', EventController::class);
    Route::patch('events/{event}/toggle-publish', [EventController::class, 'togglePublish'])->name('events.toggle-publish');

    Route::resource('zone', ZoneController::class);
    // Route::post('zone', [ZoneController::class, 'store'])->name('zone.store');
    // Route::get('zone', [ZoneController::class, 'index'])->name('zone.index');

    // Route::resource('faqs', FaqController::class);

    Route::post('/settings', [SettingController::class, 'store'])->name('settings.store');
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');


    Route::resource('services', ServiceController::class);
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');

    Route::get('/pages', [PageController::class, 'index'])->name('pages.index');
});

Route::get('services', function () {
    return view('services');
})->name('services');


Route::get('services/{id}', function () {
    return view('services-details');
})->name('services-details');


Route::get('events', function () {
    return view('events');
})->name('events');


Route::get('events/{id}', function () {
    return view('events-details');
})->name('events-details');


Route::get('blogs', function () {
    return view('blogs');
})->name('blogs');


Route::get('blogs/{id}', function () {
    return view('blogs-details');
})->name('blogs-details');


Route::get('faqs', function () {
    return view('faqs');
})->name('faqs');


Route::get('not-found', function () {
    return view('404');
})->name('not-found');


Route::get('about', function () {
    return view('about');
})->name('about');


Route::get('contact', function () {
    return view('contact');
})->name('contact');
