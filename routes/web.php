<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserLogController;
use Illuminate\Support\Facades\Route;


    Route::get('/', [LoginController::class, 'index'])->name('login');

    Route::post('/login',[LoginController::class,'authenticate'])->name('auth.login');


Route::group(['as' => 'dashboard.','prefix'=>'dashboard','middleware' => 'auth'],function(){

    Route::get('/',[DashboardController::class,'index'])->name('index');

    Route::resource('units', UnitController::class);

    Route::resource('positions', PositionController::class);

    Route::resource('users', UserController::class);

    Route::post('users/new-position', [UserController::class,'newPosition'])->name('users.new-position');
    
    Route::get('logs',[UserLogController::class,'index'])->name('logs.index');

});