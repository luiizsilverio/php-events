@extends('layouts.main')

@section('title', 'PHP Eventos')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Procurar evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Digite aqui..." >
    </form>
</div>

<div id="events-container" class="col-md-12">
    <h2>Próximos Eventos</h2>
    <p>Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
            <div class="card col-md-3">
                @if(!empty($event->image))
                    <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                @endif
                <div class="card-body">
                    <div class="card-date">10/09/2024</div>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-participants">X Participantes</p>
                    <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
