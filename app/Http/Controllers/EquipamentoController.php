<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EquipamentoController extends Controller
{
    public function showPageEquipamentos(){

        return view('pages.equipamentos');

    }

    public function cadastrarEquipamento(){

    }
}
