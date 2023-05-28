<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Views\AuthController;
use App\Http\Controllers\Views\HomeController;
use App\Http\Controllers\Views\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'showLoginPage'])->name('page.login');
});

Route::middleware('auth')->group(function () {
    Route::get('home', [HomeController::class, 'showHomePage'])->name('page.home');
    Route::get('main', [MainController::class, 'showMainPage'])->name('page.main');
});

Route::get('/', function () {
    return redirect()->route('page.login');
});
