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
Route::get('/visi', [PagesController::class, 'visiPage'])->name('visi');
Route::get('/histori', [PagesController::class, 'historiPage'])->name('histori');
Route::get('/teacher', [PagesController::class, 'teacherPage'])->name('teacher');
Route::get('/information', [PagesController::class, 'informationPage'])->name('information');
Route::get('/facilities', [PagesController::class, 'facilitiesPage'])->name('facilities');
Route::get('/contact', [PagesController::class, 'contactPage'])->name('contact');

// Halaman Authentikasi
Route::get('/login', [PagesController::class, 'loginPage'])->name('login')->middleware('guest');

// Halaman Admin
Route::get('/dashboard', [PagesController::class, 'dashboardPage'])->name('dashboard')->middleware('auth');
Route::get('/informasi', [PagesController::class, 'informasiPage'])->name('informasi')->middleware('auth');
Route::post('/informasi/insert', [InformasiController::class, 'addData'])->name('insertInformasi')->middleware('auth');
Route::put('/informasi/edit/{id}', [InformasiController::class, 'updateData'])->name('editInformasi')->middleware('auth');
Route::delete('/informasi/delete/{id}', [InformasiController::class, 'destroyData'])->name('destroyInformasi')->middleware('auth');

// Controller Admin
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
