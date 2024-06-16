<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\SessionController;
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

// Halaman Profile
Route::get('/', [PagesController::class, 'homePage'])->name('homepage');

// Halaman Authentikasi
Route::get('/login', [PagesController::class, 'loginPage'])->name('login')->middleware('guest');

// Halaman Admin
Route::get('/dashboard', [PagesController::class, 'dashboardPage'])->name('dashboard')->middleware('auth');

// Controller Admin
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
