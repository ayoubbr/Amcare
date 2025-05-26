<?php

use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderImageController;
use App\Http\Controllers\Admin\ZoneController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [HomeController::class, 'post'])->name('post');
Route::get('/blog/category/{slug}', [HomeController::class, 'category'])->name('blog.category');

Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/events/{slug}', [HomeController::class, 'event'])->name('event');

Route::get('services', [HomeController::class, 'services'])->name('services');
Route::get('services/{id}', [HomeController::class, 'service'])->name('service');

Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('faqs', [HomeController::class, 'faqs'])->name('faqs');

Route::get('/admin-access', [AuthController::class, 'accessForm'])->name('admin.access');
Route::post('/admin-access', [AuthController::class, 'verifyAccessCode'])->name('admin.verify.access');
Route::get('/admin-login', [AuthController::class, 'loginForm'])->name('admin.login.form');
Route::post('/admin-login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [SettingController::class, 'index'])->name('settings.index');

    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::put('/settings', [SettingController::class, 'update'])->name('settings.update');

    Route::resource('slider-images', SliderImageController::class);

    Route::resource('partners', PartnerController::class);

    Route::resource('faqs', FaqController::class);

    Route::resource('services', ServiceController::class);

    Route::get('/pages', [PageController::class, 'index'])->name('pages.index');
    Route::put('/pages/{page}', [PageController::class, 'update'])->name('pages.update');

    Route::resource('zones', ZoneController::class);

    Route::resource('events', EventController::class);

    Route::resource('categories', CategoryController::class);

    Route::resource('blog-posts', BlogPostController::class);

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/logout-get', [AuthController::class, 'logout'])->name('logout.get');
});


Route::get('not-found', function () {
    return view('errors.404');
})->name('not-found');
