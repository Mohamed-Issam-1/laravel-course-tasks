<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [PageController::class, 'about']);
Route::get('/students', [StudentController::class, 'index']);
