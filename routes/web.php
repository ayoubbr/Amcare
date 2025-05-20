<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

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

