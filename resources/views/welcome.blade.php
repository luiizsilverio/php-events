@extends('layouts.main')

@section('title', 'PHP Eventos')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Procurar evento</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Digite aqui..." >
    </form>
</div>

<div id="events-container" class="col-md-12">
    @if($search)
        <h2>Buscando por: {{ $search }}</h2>
    @else
        <h2>Próximos Eventos</h2>
        <p>Veja os eventos dos próximos dias</p>
    @endif

    <div id="cards-container" class="row">
        @foreach($events as $event)
            <div class="card col-md-3">
                @if(!empty($event->image))
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                @endif
                <div class="card-body">
                    <div class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</div>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-participants">{{ count($event->users) }} participante(s)</p>
                    <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @endforeach

        @if(count($events) == 0 && $search)
            <p>Não foi possível encontrar nenhum evento com {{ $search }}! <a href="/">Ver todos</a></p>
        @elseif(count($events) == 0)
            <h4>Não há eventos disponíveis</h4>
        @endif
    </div>
</div>

@endsection
