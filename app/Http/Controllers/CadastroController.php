<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Cadastro;

class CadastroController extends Controller
{
    public function indexcadastro()
    {

        return view('cadastro.cadastro');
    }


    public function cadastro(Request $request)
    {
        $cadastro = new Cadastro;

        $cadastro->nome = $request->nome;
        $cadastro->datacompra = $request->datacompra;
        $cadastro->formpagamento = $request->formpagamento;
        $cadastro->datavencimento = $request->datavencimento;
        $cadastro->parcelas = $request->parcelas;
        $cadastro->status = $request->status;
        $cadastro->address = $request->address;
        $cadastro->preco = $request->preco;

        $cadastro->save();

        return redirect('/');
    }
}
