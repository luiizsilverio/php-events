@extends('layouts.main')

@section('title', 'PHP Eventos | Produtos')

@section('content')

    <h1>Produtos</h1>
    <p>{{ $busca ?? "" }}</p>
    <a href="/">Voltar para o início</a>

@endsection
