<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RehabilitationController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/login', [LoginController::class, 'adminLogin'])->name('login');
Route::post('/login', [LoginController::class, 'adminLoginPost'])->name('admin.login');

Route::group([ 'middleware' => 'auth'], function () {

    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

    Route::get('/users/{role?}', [UserController::class, 'index'])->name('users');
    Route::get('/users-create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');

    Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/users/update/{id}', [UserController::class, 'update'])->name('users.update');

    Route::get('/users/delete/{id}', [UserController::class, 'delete'])->name('users.delete');
    Route::get('/users/role/delete/{id}/{role}', [UserController::class, 'roleDelete'])->name('user.role.delete');



    Route::group(['prefix' =>'project', 'as' => 'project.'], function () {
        Route::get('/list/{status}', [ProjectController::class, 'index'])->name('index')->where('status', 'new|on-going|completed');
        Route::get('/create', [ProjectController::class, 'create'])->name('create');
        Route::post('/store', [ProjectController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [ProjectController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [ProjectController::class, 'update'])->name('update');

        Route::get('/create/{id}/on-going', [ProjectController::class, 'createOngoing'])->name('move.ongoing');
        Route::post('/store/{id}/on-going', [ProjectController::class, 'storeOngoing'])->name('store.ongoing');

        Route::get('/create/{id}/completed', [ProjectController::class, 'createCompleted'])->name('move.completed');
        Route::post('/store/{id}/completed', [ProjectController::class, 'storeCompleted'])->name('store.completed');

        Route::get('/rehabilitation/{id}/', [RehabilitationController::class, 'index'])->name('rehabilitation');
        Route::get('/rehabilitation/{id}/create', [RehabilitationController::class, 'create'])->name('rehabilitation.create');
        Route::post('/rehabilitation/{id}/', [RehabilitationController::class, 'store'])->name('rehabilitation.store');
        Route::get('/rehabilitation/{id}/edit', [RehabilitationController::class, 'edit'])->name('rehabilitation.edit');
        Route::post('/rehabilitation/{id}/update', [RehabilitationController::class, 'update'])->name('rehabilitation.update');
        Route::get('/rehabilitation/{id}/delete', [RehabilitationController::class, 'delete'])->name('rehabilitation.delete');

        Route::get('/maintenance/{id}/', [MaintenanceController::class, 'index'])->name('maintenance');
        Route::get('/maintenance/{id}/create', [MaintenanceController::class, 'create'])->name('maintenance.create');
        Route::post('/maintenance/{id}/', [MaintenanceController::class, 'store'])->name('maintenance.store');
        Route::get('/maintenance/{id}/edit', [MaintenanceController::class, 'edit'])->name('maintenance.edit');
        Route::post('/maintenance/{id}/update', [MaintenanceController::class, 'update'])->name('maintenance.update');
        Route::get('/maintenance/{id}/delete', [MaintenanceController::class, 'delete'])->name('maintenance.delete');

        Route::get('/complaint/{id}/', [ComplaintController::class, 'index'])->name('complaint');
        Route::get('/complaint/{id}/create', [ComplaintController::class, 'create'])->name('complaint.create');
        Route::post('/complaint/{id}/', [ComplaintController::class, 'store'])->name('complaint.store');
        Route::get('/complaint/{id}/edit', [ComplaintController::class, 'edit'])->name('complaint.edit');
        Route::post('/complaint/{id}/update', [ComplaintController::class, 'update'])->name('complaint.update');
        Route::get('/complaint/{id}/delete', [ComplaintController::class, 'delete'])->name('complaint.delete');



    });

});


