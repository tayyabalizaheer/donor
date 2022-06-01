<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ProjectController;
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

    Route::get('/users/{role?}', [UserController::class, 'index'])->name('users')->where('role', 'admin|buyer|seller');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
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

        Route::get('/rehabilitation/{id}/', [ProjectController::class, 'rehabilitation'])->name('rehabilitation');
        Route::get('/maintenance/{id}/', [ProjectController::class, 'maintenance'])->name('maintenance');
        Route::get('/complaints/{id}/', [ProjectController::class, 'complaints'])->name('complaints');


        Route::post('/rehabilitation/{id}/', [ProjectController::class, 'rehabilitationStore'])->name('store.rehabilitation');
        Route::post('/maintenance/{id}/', [ProjectController::class, 'maintenanceStore'])->name('store.maintenance');
        Route::post('/complaints/{id}/', [ProjectController::class, 'complaintsStore'])->name('store.complaints');

        Route::get('/rehabilitation/{id}/delete', [ProjectController::class, 'rehabilitationDelete'])->name('rehabilitation.delete');
        Route::get('/maintenance/{id}/delete', [ProjectController::class, 'maintenanceDelete'])->name('maintenance.delete');
        Route::get('/complaints/{id}/delete', [ProjectController::class, 'complaintsDelete'])->name('complaints.delete');



    });

});


