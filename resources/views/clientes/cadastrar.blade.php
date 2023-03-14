@extends('layouts.main')

@section('title', 'Cadastrar cliente')
@section('content')


<section class="cadastrar-cliente">

    <h1> Cadastrar cliente </h1>
    <form class="row g-3" action="/cliente" method="post">
        @csrf

            <div class=" form-group col-lg-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class=" form-group col-lg-6">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" placeholder="Qno 05 conjunto B casa 03" name="endereco" required>
            </div>

        <div class="form-group col-lg-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group col-lg-12">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control cpf-mask" id="cpf" name="cpf" required>
        </div>
        <div class=" form-group col-lg-6">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control cel-sp-mask" id="telefone" name="telefone" required>
        </div>
        <div class="form-group col-lg-4">
            <label for="date" class="form-label">Data de nascimento</label>
            <input type="date" class="form-control" id="date" name="datanasc" required>
        </div>
        <div class="form-group col-lg-2"></label>
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control cep-mask" id="cep" name="cep" required>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>

</section>



@endsection
