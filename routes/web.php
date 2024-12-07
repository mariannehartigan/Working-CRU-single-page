<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FinancesController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\UserAccountController;
use Illuminate\Support\Facades\Route;

Route::get('login', [AuthController::class, 'create'])
  ->name('login');
Route::post('login', [AuthController::class, 'store'])
  ->name('login.store');
Route::delete('logout', [AuthController::class, 'destroy'])
  ->name('logout');

Route::resource('user-account', UserAccountController::class)
  ->only(['create', 'store']);

Route::resource('income', IncomeController::class)
  ->except(['create']);

Route::get('/finances', [FinancesController::class, 'index'])
  ->name('finances.index');