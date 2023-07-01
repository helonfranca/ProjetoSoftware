<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use App\Notifications\ResetPasswordNotification;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\URL;



class AgendarEquipamentoController extends Controller
{
    public function showPageAgendarEquipamentos()
    {
        if (Auth::check()) {
            // Para passar o usuário LOGADO (AUTENTICADO) e ele poder fazer parte de tabela do "agendamento" que se criará.
            $user = Auth::user();

            //Isso ta aqui só pra listar: EQUIPAMENTO IRÁ ENTRAR AQUI NO LUGAR DE "$projetos"!!! E aí tira do retunr view compact.
            $projetos = Projeto::all();

            //Pode tirar também, e aí tira do retunr view compact.
            $participantes = \App\Models\User::where('tipoUsuario', '2')->where('id', '!=', Auth::user()->id)->get();
            return view('pages.agendar', compact('user', 'projetos', 'participantes') ); // Aqui é sem a barra  "/", pois é uma view. E exibe a página de agendar
        }
        else {
            return redirect('/login');// Aqui é com a barra  "/", pois é um redirecionamento (caso o usuário não esteja logado).
        }
    }


}
