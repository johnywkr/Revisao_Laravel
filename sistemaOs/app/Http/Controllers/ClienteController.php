<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clientes;

class ClienteController extends Controller
{
    public function create(){
        return view('clientes.cadastrar');
    }

    public function store(Request $request){
        $cliente = new Clientes();

        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->endereco = $request->endereco;
        $cliente->email = $request->email;
        $cliente->telefone = $request->telefone;
        $cliente->datanasc = $request->datanasce;
        $cliente->cep = $request->cep;

        $cliente-> save(); //para salvar no banco de dados

        return redirect('/');
    }
}
