@extends('layouts.main')

@section('title', 'PHP Eventos')

@section('content')

    <img src="/img/banner.jpg" height="150" alt="Banner">
    <h1>Home</h1>
    @if(10 > 5)
        <p>Verdadeiro</p>
    @else
        <p>Falso</p>
    @endif

    <p>{{ $nome }}</p>
    <p>{{ $profissao ?? 'dev' }}</p>

    <!-- Comentário do HTML será exibido no código HTML -->
    {{-- Comentário do Blade não será exibido no código HTML --}}

    @for($i = 0; $i < count($lista); $i++)
        <p>{{ $lista[$i] }}</p>
    @endfor

@endsection

