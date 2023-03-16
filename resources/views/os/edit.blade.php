@extends('layouts.main')

@section('title', 'Inicio')
@section('content')

<section class="cadastrar-os">

    <h1> Cadastrar OS </h1>
    <form class="row g-3" action="/os/atualizar/{{$os->id}}" method="post">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label for="nome" class="form-label">Cliente</label>
            <select name="idcliente" class="form-control">
            <option value="{{$dono->id}}" > {{$dono->nome}} </option>
                @foreach($clientes as $cliente)
                <option value="{{$cliente->id}}" > {{$cliente->nome}} </option>
                @endforeach
            </select>
        </div>

        <div class="col-md-6">
            <label for="nome" class="form-label">Marca<span>*</span></label>
            <input type="text" class="form-control" id="nome" name="marca" value="{{$os->marca}}">
        </div>
        <div class="col-md-6">
            <label for="endereco" class="form-label">Modelo</label>
            <input type="text" class="form-control" id="endereco"  name="modelo" value="{{$os->modelo}}">
        </div>
        <div class="col-12">
            <label for="defeito" class="form-label">Defeito encontrado</label>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="defeito" style="height: 100px" name="defeito">{{$os->defeito}}</textarea>
                <label for="defeito">Informe o defeito</label>
            </div>
        </div>
        <div class="col-12">
            <label for="solucao" class="form-label">Solução</label>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="solucao" style="height: 100px" name="solucao">{{$os->solucao}}</textarea>
                <label for="solucao">Informe o defeito</label>
            </div>
        </div>
        <div class="col-md-2">
            <label for="preco" class="form-label">Preço</label>
            <input type="text" class="form-control" id="preco" name="preco" value="{{$os->preco}}">
        </div>


        <div class="col-12">
            <button type="submit" class="btn btn-primary">Alterar</button>
        </div>
    </form>

</section>


@endsection
