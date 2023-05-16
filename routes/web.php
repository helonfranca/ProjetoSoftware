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

Route::get('/', [AuthController::class, 'showPagePrincipal'])->name('welcome');
Route::get('/login', [AuthController::class, 'showPageLogin'])->name('login');
Route::get('/registrar', [AuthController::class, 'showRegistroForm'])->name('register');
Route::post('/registrar/save', [AuthController::class, 'registrar'])->name('registrar');
Route::post('/login',[AuthController::class, 'login'])->name('login');
