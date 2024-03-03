<?php

use App\Http\Controllers\LabelsController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AuthController;

// Luego, define tus rutas

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']); // Cambia a post en lugar de get
    Route::apiResource('labels', LabelsController::class);
    Route::apiResource('tasks', TaskController::class);
});