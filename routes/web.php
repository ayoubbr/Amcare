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
