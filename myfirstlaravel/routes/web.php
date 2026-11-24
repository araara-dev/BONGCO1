<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

route:: get('/contact', function () {
    return view('contact');
})->name('contact');

route:: get('/about', function () {
    return view('about');
})->name('about');