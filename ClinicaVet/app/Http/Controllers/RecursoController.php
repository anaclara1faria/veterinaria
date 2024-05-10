<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecursoController extends Controller
{
    public function atualizarInfo(Request $request, $id)
    {
        return view('clinica-nova-categoria');
    }
    public function criarNovo(Request $request)
    {
        return view('clinica-nova-categoria');
    }
}
