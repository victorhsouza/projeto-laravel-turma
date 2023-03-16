@extends('layouts.main')

@section('title', 'listar Clientes')
@section('content')


    @can('user')
        <p> Usuario logado</p>
    @elsecan('admin')
        <p> Administrador logado </p>

    @endcan

@endsection
