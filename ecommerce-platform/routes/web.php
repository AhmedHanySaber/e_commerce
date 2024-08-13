<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FeedbackController;

// Example for web routes (web.php)
Route::get('/users', [UserController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);
Route::post('/orders', [OrderController::class, 'store']);
Route::post('/feedback', [FeedbackController::class, 'store']);

// // Example for API routes (api.php)
// Route::get('/users', [UserController::class, 'index']);
// Route::get('/products', [ProductController::class, 'index']);
// Route::post('/orders', [OrderController::class, 'store']);
// Route::post('/feedback', [FeedbackController::class, 'store']);
