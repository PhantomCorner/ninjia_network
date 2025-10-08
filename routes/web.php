<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function () {
    // views/ninjas/index.blade.php
    // ninjas.index to access the file
    return view('ninjas.index', [
        'greetings' => 'Hello',
        'ninjas' => [
            [
                'id' => '1',
                'name' => 'Yoshi',
                'age' => 25
            ],
            [
                'id' => '2',
                'name' => 'Kuma',
                'age' => 30
            ],

        ],
    ]);
});
Route::get('/ninjas/{id}', function ($id) {
    // if accessing /ninjas/1
    // pass id = 1 to the view so view can access it
    return view('ninjas.show', [
        "id" => $id
    ]);
});
