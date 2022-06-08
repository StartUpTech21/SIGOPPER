<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminBerandaController;
use App\Http\Controllers\SuperadminBerandaController;
use App\Http\Controllers\UserController;


Route::get('/', function () {return view('login');});
    

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

Route::prefix('admin')->middleware('admin')->group(function(){
    Route::get('/', [AdminBerandaController::class, 'beranda']);
    Route::get('beranda', [AdminBerandaController::class, 'beranda']);
});

Route::prefix('superadmin')->middleware('superadmin')->group(function(){
    Route::get('/', [SuperadminBerandaController::class, 'beranda']);
    Route::get('beranda', [SuperadminBerandaController::class, 'beranda']);

    Route::get('user', [UserController::class, 'index']);
    Route::get('user/create', [UserController::class, 'create']);
    Route::post('user', [UserController::class, 'store']);
    Route::get('user/edit/{id}', [UserController::class, 'edit']);
    Route::put('user/update/{id}', [UserController::class, 'update']);
    Route::delete('user/delete/{id}', [UserController::class, 'destroy']);


});
