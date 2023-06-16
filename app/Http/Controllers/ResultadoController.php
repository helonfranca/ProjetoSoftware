<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Support\Facades\Auth;

class ResultadoController
{
    public function showPageResultados()
    {
        if (Auth::check()) {
            //Dados do usuario logado
            $usuario = Auth::user();

            //verificando se é admin e retornando todos os projetos
            if ($usuario->tipoUsuario == 1) {
                $resultados= Projeto::all();
            } else {
                $resultados = $usuario->projetos;
            }


            return view('pages.resultados', compact('resultados')); // Aqui é sem a barra  "/", pois é uma view. E exibe a página de edição do perfil
            // a variável $resultados é passada para a view usando a função compact('resultados'):
            // Essa função cria um array associativo onde a chave é o nome da variável e o valor é o valor da variável. Em seguida, esse array é passado como argumento para a função view().
        }


        return redirect('/login'); // Aqui é com a barra  "/", pois é um redirecionamento (caso o usuário não esteja logado).
    }
}
