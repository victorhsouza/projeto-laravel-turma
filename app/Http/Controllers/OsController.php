<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Os;

class OsController extends Controller
{
    public function create(){
        return view('os.cadastrar');
    }

    public function store(Request $request){
        $os = new Os();

        $os->marca = $request->marca;
        $os->modelo = $request->modelo;
        $os->defeito = $request->defeito;
        $os->solucao = $request->solucao;
        $os->preco = $request->preco;

        $os->save();

        return redirect('/')->with('msg','OS criada com sucesso!');
    }

    public function listar(){
        $os = Os::all();

        return view('os.listar',['os'=>$os]);
    }

    public function edit($id){
        $os = Os::findOrFail($id);

        return view('os.edit',['os'=>$os]);
    }

    public function update(Request $request){
        Os::findOrFail($request->id)->update($request->all());
        return redirect('/os/listar')->with('msg','OS alterada com sucesso!');
    }
}
