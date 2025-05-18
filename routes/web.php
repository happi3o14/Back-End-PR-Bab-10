<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

Route::get('/', [homeController::class, 'index']);
Route::get('/', [homeController::class, 'getName']);