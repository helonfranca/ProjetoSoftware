<?php

namespace App\Http\Controllers;

use App\Models\Resultado;
use App\Models\Projeto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultadoController extends Controller
{
    public function showPageResultados(){

        $usuario = Auth::user();

        if (!empty($usuario->projetos)) {
            $projetos = $usuario->projetos;
        }

        return view('pages.resultados', compact('projetos'));
    }

    public function obterResultadosDoProjeto(Request $request)
    {
        $projeto = $request->input('id_projeto');

        // Lógica para obter os resultados do projeto selecionado
        $projeto = Projeto::find($projeto);

        //buscar resultados do projeto
        $resultados = $projeto->resultados()->get();

        $usuario = Auth::user();
        $projetos = $usuario->projetos;

        return view('pages.resultados', compact('resultados', 'projetos'))
            ->with('projetoSelecionado', $projeto);
    }

    public function cadastrarResultado(Request $request){

        try{
            $request->validate([
                'titulo' => 'required|min:1|max:50|unique:resultados' ,
                'data' => 'required|date|before_or_equal:today|',
                'link' => 'required|url|max:255',
                'projeto_id' => 'required|exists:projetos,id',
            ], [
                'titulo.unique' => 'O titulo já está em uso.',
                'titulo.required' => 'O campo título é obrigatório.',
                'titulo.min' => 'O campo título deve ter pelo menos 1 caractere.',
                'titulo.max' => 'O campo título deve ter no máximo 50 caracteres.',
                'data.required' => 'O campo data é obrigatório.',
                'data.before_or_equal' => 'A data deve ser igual ou anterior à data atual.',
                'data.date' => 'O campo data deve ser uma data válida.',
                'link.required' => 'O campo link é obrigatório.',
                'link.url' => 'Coloque um link válido para referente ao documento.',
                'projeto_id.exists' => 'O projeto selecionado não existe.',
                'projeto_id.required' =>'Selecione um projeto para adicionar item.',

            ]);

            $projetoId = $request->input('projeto_id');

            $resultado = new Resultado();
            $resultado->titulo = trim($request->input('titulo'));
            $resultado->data = $request->input('data');
            $resultado->link = trim($request->input('link'));
            $resultado->projeto_id = $projetoId;
            $resultado->save();

            return redirect()->back()->with('success', 'Resultado adicionado com sucesso!');

        }catch (\Exception $exception) {

            return redirect()->back()->withErrors([$exception->getMessage()]);
        }
    }
    public function visualizarResultado($idResultado)
    {
        // Buscar o item pelo ID
        $resultado = Resultado::findOrFail($idResultado);

        // Retornar os dados do item em formato JSON
        return response()->json(['resultado' => $resultado]);
    }

    public function editarResultado(Request $request)
    {
        try {
            $request->validate([
                'titulo' => 'required|min:1|max:50|unique:resultados' ,
                'data' => 'required|date|before_or_equal:today|',
                'link' => 'required|url|max:255',
            ], [
                'titulo.unique' => 'O titulo já está em uso.',
                'titulo.required' => 'O campo título é obrigatório.',
                'titulo.min' => 'O campo título deve ter pelo menos 1 caractere.',
                'titulo.max' => 'O campo título deve ter no máximo 50 caracteres.',
                'titulo.required' => 'O campo data é obrigatório.',
                'data.before_or_equal' => 'A data deve ser igual ou anterior à data atual.',
                'data.date' => 'O campo data deve ser uma data válida.',
                'link.required' => 'O campo link é obrigatório.',
                'link.url' => 'Coloque um link válido para referente ao documento.',
            ]);
            $idResultado = $request->input('resultado_id');

            $resultado = Resultado::findOrFail($idResultado);
            $resultado->titulo = trim($request->input('titulo'));
            $resultado->data = $request->input('data');
            $resultado->link = trim($request->input('link'));
            $resultado->projeto_id = $request->input('projeto_id');
            $resultado->save();

            return redirect()->back()->with('success', 'Resultado atualizado com sucesso!');

        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }
    }

    public function deletarResultado(Request $request){

        $idResultado = $request->input('id_resultado');

        $resultado = Resultado::find($idResultado);
        $ResultadoDeletado = $resultado->delete();

        if($ResultadoDeletado){
            return redirect()->back()->with('success', 'Resultado excluído com sucesso!');
        } else{
            return redirect()->route('resultados')->with('error', 'resultado não foi excluído!');
        }
    }
}
