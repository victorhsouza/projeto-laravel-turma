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
        $cliente->cep = $request-> cep;

        $cliente->save();

        return redirect('/cliente/listar')->with('msg','Usuario cadastrado com sucesso!');

    }

    public function listar(){
        $clientes = Clientes::all();

        return view('clientes.listar',['clientes'=> $clientes]);
    }

    public function edit($id){
        $cliente = Clientes::findOrFail($id);

        return view('clientes.edit',['cliente' => $cliente]);
    }

    public function update(Request $request){
        Clientes::findOrFail($request->id)->update($request->all());
        return redirect('/cliente/listar')->with('msg','Cliente alterado com sucesso');
    }

    public function destroy($id){
        Clientes::findOrFail($id)->delete();
        return redirect('/cliente/listar')->with('msg','Cliente excluido com sucesso!');
    }
}
