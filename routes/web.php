<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'index'] ) ->name('Home');
Route::get('/', [PublicController::class, 'Page1'] ) ->name('Page1');
Route::get('/', [PublicController::class, 'Page2'] ) ->name('Page2');
