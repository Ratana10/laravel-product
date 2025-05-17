<?php

use App\Http\Controllers\Api\CategoryController;
use Illuminate\Support\Facades\Route;


// Category routes
Route::apiResource('categories', CategoryController::class);