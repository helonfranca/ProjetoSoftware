<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjetoController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function listarProjetos()
    {
        //Dados do usuario logado
        $usuario = Auth::user();

        //verificando se é admin e retornando todos os projetos
        if ($usuario->tipoUsuario == 1) {
            $projetos = Projeto::all();
        } else {
            $projetos = $usuario->projetos;
        }

        return view('pages.projetos', compact('projetos'));
    }

    public function cadastrarProjeto(Request $request){
        try{
            //validações
            $request->validate([
                'titulo' => 'required',
                'data_inicial' => 'required|date|after_or_equal:today|',
                'data_final' => 'required|date|after_or_equal:today',
                'descricao' => 'required|string|min:50|max:255',
            ], [
                'titulo.required' => 'O campo título é obrigatório.',
                'data_inicial.required' => 'O campo data inicial é obrigatório.',
                'data_inicial.after_or_equal' => 'A data inicial deve ser a partir da data atual.',
                'data_inicial.date' => 'O campo data inicial deve ser uma data válida.',
                'data_final.after_or_equal' => 'A data final deve ser a partir da data atual.',
                'data_final.required' => 'O campo data final é obrigatório.',
                'data_final.date' => 'O campo data final deve ser uma data válida.',
                'descricao.required' => 'O campo descrição é obrigatório.',
                'descricao.string' => 'O campo descrição deve ser uma sequência de caracteres.',
                'descricao.min' => 'O campo descrição deve ter no mínimo 50 caracteres.',
                'descricao.max' => 'O campo descrição deve ter no máximo 255 caracteres.'
            ]);

            // Criar um novo projeto
            $projeto = new Projeto;
            $projeto->titulo = trim($request->titulo);
            $projeto->data_inicial = $request->data_inicial;
            $projeto->data_final =  $request->data_final;
            $projeto->descricao = trim($request->descricao);
            $projeto->status = trim($request->status);

            // salvar o projeto associado ao usuário atual
            $usuario = Auth::user();

            //projeto é um array de objetos
            $dadosCriado = $usuario->projetos()->create($projeto->toArray());

            if($dadosCriado){
                return redirect()->route('projetos')->with('success', 'Projeto adicionado com sucesso!');
            }

        }catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }

    }

    public function verificarProjeto($id){

        //filtra o projeto baseado no id
        $projeto = Projeto::findOrFail($id);

        //retorna um json para  mostrar no modal
        return response()->json(['projeto' => $projeto]);
    }

    public function editarProjeto(Request $request){

        try{
            //validações
            $request->validate([
                'titulo' => 'required',
                'data_inicial' => 'required|date|after_or_equal:today|',
                'data_final' => 'required|date|after_or_equal:today',
                'descricao' => 'required|string|min:50|max:255',
            ], [
                'titulo.required' => 'O campo título é obrigatório.',
                'data_inicial.required' => 'O campo data inicial é obrigatório.',
                'data_inicial.after_or_equal' => 'A data inicial deve ser a partir da data atual.',
                'data_final.after_or_equal' => 'A data final deve ser a partir da data atual.',
                'data_inicial.date' => 'O campo data inicial deve ser uma data válida.',
                'data_final.required' => 'O campo data final é obrigatório.',
                'data_final.date' => 'O campo data final deve ser uma data válida.',
                'descricao.required' => 'O campo descrição é obrigatório.',
                'descricao.string' => 'O campo descrição deve ser uma sequência de caracteres.',
                'descricao.min' => 'O campo descrição deve ter no mínimo 50 caracteres.',
                'descricao.max' => 'O campo descrição deve ter no máximo 255 caracteres.'
            ]);

            //Recuperar projeto com id
            $projeto = Projeto::find($request->input('id'));

            $projeto->titulo = trim($request->titulo);
            $projeto->data_inicial = $request->data_inicial;
            $projeto->data_final =  $request->data_final;
            $projeto->descricao = trim($request->descricao);
            $projeto->status = trim($request->status);
            $projeto->save();

            if ($projeto) {
                return redirect()->route('projetos')->with('success', 'Projeto editado com sucesso!');
            }
        }catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }

    }

    public function deletarProjeto(Request $request){

        $projeto = Projeto::find($request->input('id'));
        $projetoDeletado = $projeto->delete();

        if($projetoDeletado){
            return redirect()->route('projetos')->with('success', 'Projeto excluído com sucesso!');
        } else{
            return redirect()->route('projetos')->with('error', 'Projeto não foi excluído!');
        }
    }
}
