<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Project\ProjectController;
use App\Http\Controllers\Api\Task\TaskController;
use Illuminate\Support\Facades\Route;

Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/register', [AuthController::class, 'register']);

Route::middleware('auth:api')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);
    });

    Route::prefix('project')->group(function () {
        Route::post('store', [ProjectController::class, 'store']);
    });

    Route::prefix('tasks')->group(function () {
        Route::post('store', [TaskController::class, 'store']);
        Route::get('/status-list', [TaskController::class, 'getAllTaskStatus']);
    });
});
