<?php

use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ZoneController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


require __DIR__.'/auth.php';


Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


    Route::get('/zone', [ZoneController::class, 'index'])->name('zone.index');


    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');



    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');



    Route::get('/pages', [PageController::class, 'index'])->name('pages.index');


    Route::get('/blog', [BlogPostController::class, 'index'])->name('blog.index');


    Route::get('/event', [EventController::class, 'index'])->name('event.index');

});