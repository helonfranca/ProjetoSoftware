<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjetoController extends Controller
{
    public function showPage()
    {

        dd(Auth::check());
        //Funcionando corretamente até aqui!
        //return view('pages.projetos');

    }
}
