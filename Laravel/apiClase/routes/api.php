<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\LabelsController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    // Rutas para el controlador TaskController
    Route::resource('task', TaskController::class);
    // Rutas adicionales para el controlador TaskController
    Route::get('logout', [AuthController::class, 'logout']);

    // Rutas para el controlador LabelsController
    Route::resource('labels', LabelsController::class);
});
