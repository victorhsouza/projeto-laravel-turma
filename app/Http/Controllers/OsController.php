<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Clientes;
use Illuminate\Http\Request;
use App\Models\Os;
use Illuminate\Support\Facades\DB;


class OsController extends Controller
{
    public function create()
    {
        $clientes = Clientes::all();

        return view('os.cadastrar', ['clientes' => $clientes]);
    }

    public function store(Request $request)
    {
        $os = new Os();
        $os->idcliente = $request->idcliente;
        $os->marca = $request->marca;
        $os->modelo = $request->modelo;
        $os->defeito = $request->defeito;
        $os->solucao = $request->solucao;
        $os->preco = $request->preco;

        $os->save();

        return redirect('/os/listar')->with('msg', 'OS criada com sucesso!');
    }

    public function listar()
    {
        // $os = Os::all();
        $search = request('search');

        if ($search) {
            $lista = DB::table('os')
                ->join('clientes', 'clientes.id', '=', 'os.idcliente')
                ->where('os.id','like','%'.$search.'%')
                ->orWhere('clientes.nome','like','%'.$search.'%')
                ->select('os.*', 'clientes.nome')
                ->get();
        } else {
            $lista = DB::table('os')
                ->join('clientes', 'clientes.id', '=', 'os.idcliente')
                ->select('os.*', 'clientes.nome')
                ->get();
        }

        return view('os.listar', ['os' => $lista, 'search'=> $search]);
    }

    public function edit($id)
    {
        try {
            $os = Os::findOrFail($id);
            $clientes = Clientes::all();

            $dono = Clientes::where('id', '=', $os->idcliente)->first();

            return view('os.edit', ['os' => $os, 'clientes' => $clientes, 'dono' => $dono]);
        } catch (\Throwable $th) {
            abort('403', 'Deu erro na solicitação');
        }
    }

    public function update(Request $request)
    {
        Os::findOrFail($request->id)->update($request->all());
        return redirect('/os/listar')->with('msg', 'OS alterada com sucesso!');
    }
}
