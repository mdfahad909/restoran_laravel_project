<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/', function () {
    return view('pages.homebg');
});

Route::get('/menu', function () {
    return view('pages.menu');
});

Route::get('/booking', function () {
    return view('pages.booking');
});

Route::get('/team', function () {
    return view('pages.team');
});

Route::get('/about', function () {
    return view('pages.about');
})->name('aboutr');

Route::get('/testimonial', function () {
    return view('pages.testimonial');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/footer', function () {
    return view('footer');
});


