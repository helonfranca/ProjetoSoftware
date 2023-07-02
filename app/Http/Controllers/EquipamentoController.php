<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


use App\Models\Equipamento;
use App\Models\Tipo_equipamento;
use Illuminate\Http\Request;

class EquipamentoController extends Controller
{
    public function showPageEquipamentos(){


        $equipamentos = Equipamento::all();

        $tipo_equipamentos = Tipo_equipamento::all();
        return view('pages.equipamentos',compact('tipo_equipamentos', 'equipamentos'));


    }

    public function cadastrarEquipamento(Request $request){
            try{
                $request->validate([
                    'nome' => 'required',
                    'quantidade' => 'required|numeric|min:1',
                    'descricao' => 'required| |min:10|max:255',
                    'tipo_equipamento' => 'required| exists:tipo_equipamentos,id',

                ], [
                    'nome.required' => 'O campo nome é obrigatório.',
                    'quantidade.required' => 'O campo quantidade é obrigatório.',
                    'quantidade.numeric' => 'O campo quantidade deve ser um número.',
                    'quantidade.min' => 'O campo quantidade deve ser maior que zero.',
                    'descricao.required' => 'O campo descrição é obrigatório.',
                    'descricao.min' => 'O campo descrição deve ter no mínimo 10 caracteres.',
                    'descricao.max' => 'O campo descrição deve ter no máximo 255 caracteres.',
                    'tipo_equipamento.exists' => 'O tipo de equipamento selecionado não existe',
                    'tipo_equipamento.required' => 'O campo tipo de equipamento é obrigatório.'
                ]);

               ;

                $equipamentos = new Equipamento();
                $equipamentos->nome = trim($request->input('nome'));
                $equipamentos->quantidade = $request->input('quantidade');
                $equipamentos->descricao = trim($request->input('descricao'));
                $equipamentos->tipoEquipamento = $request->input('tipo_equipamento');
                $equipamentos->save();

                return redirect()->back()->with('success', 'Equipamento adicionado com sucesso!');

            }catch (\Exception $exception) {

                return redirect()->back()->withErrors([$exception->getMessage()]);
            }
        }


}
