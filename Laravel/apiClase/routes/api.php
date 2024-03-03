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

// Rutas para las etiquetas (labels)
Route::middleware('auth:sanctum')->post('/labels', [LabelsController::class, 'store']);
Route::middleware('auth:sanctum')->get('/labels', [LabelsController::class, 'index']);
Route::middleware('auth:sanctum')->get('/labels/{id}', [LabelsController::class, 'show']);
Route::middleware('auth:sanctum')->put('/labels/{id}', [LabelsController::class, 'update']);
Route::middleware('auth:sanctum')->delete('/labels/{id}', [LabelsController::class, 'destroy']);

Route::middleware('auth:sanctum')->group(function () {
    Route::resource('tasks', TaskController::class); 
    Route::get('logout', [AuthController::class, 'logout']);
});
