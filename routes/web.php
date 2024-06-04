<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index2');
});

Route::get('/detection', function () {
    return view('detection');
});
