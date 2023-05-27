<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::post('login', [AuthController::class, 'signIn'])->name('ticket.login');
Route::post('logout', [AuthController::class, 'signOut'])->name('ticket.logout');
