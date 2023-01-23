<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\MovieController as MovieController;

Route::get('/', [MovieController::class, 'index'])->name('home');
