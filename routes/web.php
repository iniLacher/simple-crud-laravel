<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/v1/categories', [App\Http\Controllers\Api\V1\CategoryController::class, 'index']);
Route::get('/api/v1/categories/{id}', [App\Http\Controllers\Api\V1\CategoryController::class, 'show']);

Route::post('/api/v1/categories', [App\Http\Controllers\Api\V1\CategoryController::class, 'store']);

Route::put('/api/v1/categories/{id}', [App\Http\Controllers\Api\V1\CategoryController::class, 'update']);

Route::delete('/api/v1/categories/{id}', [App\Http\Controllers\Api\V1\CategoryController::class, 'delete']);