<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'showPagePrincipal'])->name('welcome');
Route::get('/login', [AuthController::class, 'showPageLogin'])->name('login');
Route::get('/registrar', [AuthController::class, 'showRegistroForm'])->name('register');
Route::get('/login/recuperar_senha', [AuthController::class, 'showRecuperarSenhaForm'])->name('recuperarSenha');
Route::get('/resetar-senha/{token}', [AuthController::class,'showmudSenhaForm'])->name('password.reset');

Route::post('/resetar-senha', [AuthController::class,'updateSenha'])->name('resetar.senha');
Route::post('/recuperar_senha', [AuthController::class, 'recuperSenha'])->name('recuperar_senha');
Route::post('/registrar/save', [AuthController::class, 'registrar'])->name('registrar');
Route::post('/login',[AuthController::class, 'login'])->name('login');

Route::get('/projetos', function(){ //apenas rota de taste
    return view('pages.projetos');
});

Route::middleware(['auth'])->group(function () {
    //colocar rotas que precisam de verificação aqui dentro!
});
