<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WorkController;


Route::get('/', HomeController::class);

Route::resource('posts', PostController::class)->only([
    'index',
    'show'
]);