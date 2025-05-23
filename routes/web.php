<?php

use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\FaqController;
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

Route::get('services', [HomeController::class, 'services'])->name('services');
Route::get('services/{id}', [HomeController::class, 'service'])->name('service');

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

    Route::resource('services', ServiceController::class);

    Route::resource('zone', ZoneController::class);

    Route::resource('faqs', FaqController::class);

    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('/settings', [SettingController::class, 'update'])->name('settings.store');

    Route::get('/pages', [PageController::class, 'index'])->name('pageSection');
    Route::get('/pages/{page}', [PageController::class, 'show'])->name('pageSection');
    Route::put('/pages/{id}', [PageController::class, 'update'])->name('pageSection');
});

Route::get('faqs', function () {
    return view('faqs');
})->name('faqs');


Route::get('not-found', function () {
    return view('errors.404');
})->name('not-found');


Route::get('about', function () {
    return view('about');
})->name('about');


Route::get('contact', function () {
    return view('contact');
})->name('contact');
