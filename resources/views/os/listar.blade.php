@extends('layouts.main')

@section('title', 'Listar OS')
@section('content')

<section class="listar-os">
<table class="table">
        <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Defeito</th>
                <th scope="col">Solução</th>
                <th scope="col">Preço</th>
                <th scope="col">Data</th>
                <th scope="col" class="text-center" colspan="2">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($os as $o)
            <tr class="text-center">
                <th scope="row">{{$o->id}}</th>
                <td>{{$o->marca}}</td>
                <td>{{$o->modelo}}</td>
                <td>{{$o->defeito}}</td>
                <td>{{$o->solucao}}</td>
                <td>{{$o->preco}}</td>
                <td>{{date('d/m/Y H:m', strtotime($o->created_at, 1))}}</td>
                <td><a href="/os/{{$o->id}}" class="btn btn-warning
                "> Alterar</a></td>
                <td><a href="#" class="btn btn-danger
                "> Finalizar</a></td>

            </tr>
            @endforeach
        </tbody>
    </table>

</section>


@endsection
