<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastro;

class ListagemController extends Controller
{
    public function index()
    {
        $cadastros = Cadastro::all();
        return view('welcome', ['cadastros' => $cadastros]);
    }
}
