<?php

use App\Http\Controllers\PostController;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/',[PostController::class,'index']);
Route::get('/article/{post:id}',[PostController::class,'show']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

