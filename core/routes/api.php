<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\ComplaintController;
use App\Http\Controllers\Api\MaintenanceController;
use App\Http\Controllers\Api\RehabilitationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/projects/{status}', [
    ProjectController::class, 'index'
    ])
    ->where('status', 'new|on-going|completed');

Route::get('/projects/rehabilitation/{id}/',
    [RehabilitationController::class, 'index']
);
Route::get('/projects/maintenance/{id}/',
    [MaintenanceController::class, 'index']
);
Route::get('/projects/complaint/{id}/',
    [ComplaintController::class, 'index']
);

