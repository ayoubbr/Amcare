<?php

use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ZoneController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [HomeController::class, 'post'])->name('post');
Route::get('/blog/category/{slug}', [HomeController::class, 'category'])->name('blog.category');


Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/events/{slug}', [HomeController::class, 'event'])->name('event');



require __DIR__.'/auth.php';


Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


    Route::get('/zone', [ZoneController::class, 'index'])->name('zone.index');


    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');



    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');



    Route::get('/pages', [PageController::class, 'index'])->name('pages.index');

    Route::resource('events', EventController::class);
    Route::patch('events/{event}/toggle-publish', [EventController::class, 'togglePublish'])->name('events.toggle-publish');


    Route::resource('blog', BlogPostController::class);
    Route::patch('blog/{post}/toggle-publish', [BlogPostController::class, 'togglePublish'])->name('blog.toggle-publish');
    Route::get('blog/{post}/preview', [BlogPostController::class, 'preview'])->name('blog.preview');
    
    Route::resource('categories', CategoryController::class);


});