<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/test', function () {
    return view('test');
})->name('test_page');

Route::get('/detection', function () {
    return view('detection');
});
