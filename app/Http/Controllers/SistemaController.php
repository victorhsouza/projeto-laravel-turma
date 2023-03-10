<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SistemaController extends Controller
{
    //
    public function welcome(){
        $nome = "Victor";
        return view('sistema.welcome',['nome'=>$nome]);
    }

    public function sobre(){
        return view('sistema.sobre');
    }

    public function servicos(){

        return view('sistema.servicos');
    }
}
