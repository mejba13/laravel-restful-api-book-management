<?php

use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/status', function () {
    return response()->json(['status' => 'API is running']);
});

// Routes protected by Sanctum middleware
//Route::middleware('auth:sanctum')->group(function () {
//    Route::apiResource('books', BookController::class);
//});

Route::apiResource('books', BookController::class);

