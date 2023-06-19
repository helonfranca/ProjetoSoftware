<?php

namespace App\Http\Controllers;


use App\Models\Item;

use App\Models\Projeto;
use Illuminate\Support\Facades\Auth;

class ItemController
{

    public function showPageItens()
    {
        if (Auth::check()) {
            //Dados do usuario logado
            $usuario = Auth::user();

            //verificando se é admin e retornando todos os projetos
            if ($usuario->tipoUsuario == 1) {
                $itens= Projeto::all();
            } else {
                $itens = $usuario->projetos;
            }

            return view('pages.itens', compact('itens')); // Aqui é sem a barra  "/", pois é uma view. E exibe a página de edição do perfil
            // a variável $itens é passada para a view usando a função compact('itens'):
            // Essa função cria um array associativo onde a chave é o nome da variável e o valor é o valor da variável. Em seguida, esse array é passado como argum
        }

    }

}
