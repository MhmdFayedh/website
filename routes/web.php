<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, PostController, WorkController};


Route::get('/', HomeController::class);

Route::resource('posts', PostController::class)->only([
    'index',
    'show'
]);

Route::resource('works', WorkController::class)->only([
    'index',
    'show'
]);