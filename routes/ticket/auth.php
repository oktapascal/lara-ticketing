<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::post('login', [AuthController::class, 'signIn'])->name('ticket.auth.login');
Route::post('logout', [AuthController::class, 'signOut'])->name('ticket.auth.logout');

Route::middleware('auth')->group(function () {
    Route::post('kelompok-menu/update', [AuthController::class, 'setKelompokMenu'])->name('ticket.auth.klpmenu');
});
