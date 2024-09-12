<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $posts = [
        [
            'id' => 1,
            'title' => 'Artikel 1',
            'author' => 'John Doe',
            'body'=>'halo dunia ini adalah body dari routers'
        ],
        [
            'id' => 2,
            'title' => 'Artikel 2',
            'author' => 'Jane Queen',
            'body'=>'halo dunia ini adalah body dari routers 2'
        ]
    ];
    return view('welcome', ['posts'=>$posts]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
