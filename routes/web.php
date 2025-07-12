<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/users', UserController::class)->except(['show']);
Route::get('/createDemon', [UserController::class, 'createDemon']);



