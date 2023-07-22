<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use App\Models\Tipo_equipamento;

class AgendarEquipamentoController extends Controller
{
    public function showPageAgendarEquipamentos()
    {
        $equipamentos = Equipamento::all();

        $tipo_equipamentos = Tipo_equipamento::all();
        return view('pages.agendar',compact('tipo_equipamentos', 'equipamentos'));
    }

}
