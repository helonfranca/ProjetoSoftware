<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjetoController;

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
Route::get('/login/recuperar_senha', [AuthController::class, 'showRecuperarSenhaForm'])->name('recuperarSenha');
Route::get('/resetar-senha/{token}', [AuthController::class,'showmudSenhaForm'])->name('password.reset');

Route::post('/resetar-senha', [AuthController::class,'updateSenha'])->name('resetar.senha');
Route::post('/recuperar_senha', [AuthController::class, 'recuperSenha'])->name('recuperar_senha');
Route::post('/registrar/save', [AuthController::class, 'registrar'])->name('registrar');
Route::post('/login',[AuthController::class, 'login'])->name('login');
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    //Rotas projetos
    Route::get('/projetos', [ProjetoController::class, 'listarProjetos'])->name('projetos');
    Route::post('/projetos/salvar', [ProjetoController::class, 'cadastrarProjeto'])->name('salvar_projeto');
    Route::get('/projetos/visualizar/{id}', [ProjetoController::class, 'verificarProjeto'])->name('verificar_projeto');
    Route::put('/projetos/editar', [ProjetoController::class, 'editarProjeto'])->name('editar_projeto');
    Route::delete('/projetos/deletar', [ProjetoController::class, 'deletarProjeto'])->name('deletar_projeto');

    Route::get('/projetos/editarPerfil', [ProjetoController::class, 'showPageEditarPerfil'])->name('editarPerfil'); //Pega o get "/editar...", vai no "Auth:: , showPageEdit..." e aida dá um nome
    Route::get('/projetos/editarSenha', [ProjetoController::class, 'showPageEditarSenha'])->name('editarSenha');

    Route::post('/projetos/editarPerfil/save', [ProjetoController::class, 'editarPerfil'])->name('editarPerfilSave');
    Route::post('/projetos/editarSenha/save', [ProjetoController::class, 'editarSenha'])->name('editarSenhaSave'); //Esse "nome" que damos, é usado no HTML action (do forms).

    //Rota Page principal
    Route::get('/home', [ProjetoController::class, 'home'])->name('home');

    //Pages de Itens
    Route::get('/itens', [ItemController::class, 'showPageItens'])->name('itens');
    Route::get('/itens/buscar', [ItemController::class,'obterItensDoProjeto'])->name('itens.buscar');
    Route::post('/itens/salvar', [ItemController::class,'cadastrarItem'])->name('itens.salvar');
    Route::get('/itens/visualizar/{id}', [ItemController::class, 'visualizarItem'])->name('itens.visualizar');
    Route::put('/itens/editar', [ItemController::class, 'editarItem'])->name('itens.editar');
    Route::delete('/itens/deletar', [ItemController::class, 'deletarItem'])->name('itens.deletar');

});


