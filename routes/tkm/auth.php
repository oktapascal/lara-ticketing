<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\API\KelompokMenuController;

Route::post('login', [AuthController::class, 'signIn'])->name('tkm.auth.login');
Route::post('logout', [AuthController::class, 'signOut'])->name('tkm.auth.logout');

Route::middleware('auth')->group(function () {
    Route::post('kelompok-menu/update', [AuthController::class, 'setKelompokMenu'])->name('tkm.auth.klpmenu.update');
    Route::get('kelompok-menu/all', [KelompokMenuController::class, 'getAll'])->name('tkm.auth.klpmenu.all');
});
