@extends('layouts.main')

@section('title', 'Inicio')
@section('content')



<section class="inicio mt-3">
    <div class="header">
        <h1 class="display-3"> Vitec Informática </h1>
        <p> Assitencia Técnica especializada em Celulares, Tablet's e computadores em geral</p>
    </div>


    <div class="cards d-flex justify-content-around mt-5 mb-6">
        <div class="card-1">
            <div class="card" style="width: 18rem;">
                <img src="/img/imagem-1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Celulares</h5>
                    <p class="card-text">Troca de telas, vidros, conectores de carga e reparos avançados. Trabalhamos com todas as marcas: Samsung, Motorola, LG, Xioami e Iphones</p>
                    <a href="#" class="btn btn-primary">Faça um orçamento</a>
                </div>
            </div>
        </div>

        <div class="card-2">
            <div class="card" style="width: 18rem;">
                <img src="/img/notebook.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Computadores em geral</h5>
                    <p class="card-text">Formatação e configuração, instalação de programas, instalação de jogos, reparos avançados.</p>
                    <a href="#" class="btn btn-primary">Faça um orçamento</a>
                </div>
            </div>
        </div>

        <div class="card-3">
            <div class="card" style="width: 18rem;">
                <img src="/img/loja.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Loja</h5>
                    <p class="card-text">A loja fica localizada na feira dos importados do P-norte na ceilandia, atras da faculdade IESB.</p>
                    <a href="#" class="btn btn-primary">Ver localização</a>
                </div>
            </div>
        </div>
    </div>



@endsection
