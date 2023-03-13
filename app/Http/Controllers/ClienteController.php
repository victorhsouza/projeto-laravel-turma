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

        $cliente->nome = $request-> nome;
        $cliente->endereco = $request-> endereco;
        $cliente->telefone = $request-> telefone;
        $cliente->cpf = $request-> cpf;
        $cliente->email = $request-> email;
        $cliente->datanasc = $request-> datanasc;

        $cliente->save();

        return redirect('/')->with('msg','Usuario cadastrado com sucesso!');

    }

    public function listar(){
        $clientes = Clientes::all();

        return view('clientes.listar',['clientes'=> $clientes]);


    }
}
