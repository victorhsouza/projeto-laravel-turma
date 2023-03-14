@extends('layouts.main')

@section('title', 'Alterar cliente')
@section('content')
    <h1> Alteração</h1>
    <form class="row g-3" action="/cliente/atualizar/{{$cliente->id}}" method="post">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label for="nome" class="form-label">Nome<span>*</span></label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{$cliente->nome}}">
        </div>
        <div class="col-md-6">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco"  name="endereco" value="{{$cliente->endereco}}">
        </div>
        <div class="col-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$cliente->email}}">
        </div>
        <div class="col-12">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" value="{{$cliente->cpf}}">
        </div>
        <div class="col-md-6">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" value="{{$cliente->telefone}}">
        </div>
        <div class="col-md-4">
            <label for="date" class="form-label">Data de nascimento</label>
            <input type="date" class="form-control" id="date" name="datanasc" value="{{$cliente->datanasc}}">
        </div>
        <div class="col-md-2"></label>
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" value="{{$cliente->cep}}">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Alterar</button>
        </div>

    </form>


@endsection
