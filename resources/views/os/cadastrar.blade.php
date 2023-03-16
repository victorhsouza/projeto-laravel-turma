@extends('layouts.main')

@section('title', 'Inicio')
@section('content')
<section class="cadastrar-os">

    <h1> Cadastrar OS </h1>
    <form class="row g-3" action="/os" method="post">
        @csrf
        <div class="col-md-12">
            <label for="nome" class="form-label">Cliente</label>
            <select name="idcliente" class="form-control">

                @foreach($clientes as $cliente)
                <option value="{{$cliente->id}}" > {{$cliente->nome}} </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="nome" class="form-label">Marca<span>*</span></label>
            <input type="text" class="form-control" id="nome" name="marca" required>
        </div>
        <div class="col-md-6">
            <label for="endereco" class="form-label">Modelo</label>
            <input type="text" class="form-control" id="endereco"  name="modelo" required>
        </div>
        <div class="col-12">
            <label for="defeito" class="form-label">Defeito encontrado</label>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="defeito" style="height: 100px" name="defeito"></textarea>
                <label for="defeito">Informe o defeito</label>
            </div>
        </div>
        <div class="col-12">
            <label for="solucao" class="form-label">Solução</label>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="solucao" style="height: 100px" name="solucao"></textarea>
                <label for="solucao">Informe o defeito</label>
            </div>
        </div>
        <div class="col-md-2">
            <label for="preco" class="form-label">Preço</label>
            <input type="text" class="form-control" id="preco" name="preco" required>
        </div>


        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>

</section>

@endsection
