<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin'], function () {
    Route::group(['namespace' => 'Dashboard'], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    });

    Route::group(['namespace' => 'Auth'], function () {
        Route::get('logout', [AuthController::class,'logout'])->name('admin.logout');

    });
});
Route::group(['namespace' => 'Admin\Auth','middleware' => 'guest:admin'], function () {

    Route::get('login', [AuthController::class, 'show_login_view'])->name('admin.showlogin');
    Route::post('login', [AuthController::class, 'login'])->name('admin.login');
});
