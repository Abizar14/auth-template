<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::get('login', [AuthController::class, 'login'])->name('authLogin');
Route::post('login', [AuthController::class, 'processLogin']);

Route::get('register', [AuthController::class, 'register'])->name('authRegister');
Route::post('register', [AuthController::class, 'processRegister']);



Route::middleware('auth')->group(function() {
    Route::get('dashboard', function() {
        return view('page.dashboard');
    });

    Route::get('logout', [AuthController::class, 'logout']);
});
