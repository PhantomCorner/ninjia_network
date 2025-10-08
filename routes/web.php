<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function () {
    // views/ninjas/index.blade.php
    // ninjas.index to access the file
    return view('ninjas.index');
});
