<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use  App\Http\Controllers\Admin\AdminLoginController;
use  App\Http\Controllers\Admin\DashboardController;
use  App\Http\Controllers\Admin\UserController;
use  App\Http\Controllers\Admin\CompaniesController;


Auth::routes(['except' => 'register']);
Route::prefix('admin')->group(function () {
    Route::get('login-show', [AdminLoginController::class, 'login'])->name('admin.login');
    Route::post('login', [AdminLoginController::class, 'doLogin'])->name('admin.do.login');
    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.home');
        //Users Route
        Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
        Route::get('/users/create', [UserController::class, 'create'])->name('admin.users.create');
        Route::post('/users/store', [UserController::class, 'store'])->name('admin.users.store');
        Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('admin.users.edit');
        Route::post('/users/update/{id}', [UserController::class, 'update'])->name('admin.users.update');
        Route::delete('/users/delete/{id}', [UserController::class, 'delete'])->name('admin.users.delete');
        Route::get('logout', [UserController::class, 'logout'])->name('logout');

        //  companies Route
        Route::get('/companies', [CompaniesController::class, 'index'])->name('admin.companies.index');
        Route::get('/companies/create', [CompaniesController::class, 'create'])->name('admin.companies.create');
        Route::post('/companies/store', [CompaniesController::class, 'store'])->name('admin.companies.store');
        Route::get('/companies/edit/{id}', [CompaniesController::class, 'edit'])->name('admin.companies.edit');
        Route::post('/companies/update/{id}', [CompaniesController::class, 'update'])->name('admin.companies.update');
        Route::delete('/companies/delete/{id}', [CompaniesController::class, 'delete'])->name('admin.companies.delete');
    });
});
