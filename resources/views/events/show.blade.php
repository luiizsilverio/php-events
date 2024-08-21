@extends('layouts.main')

@section('title', "PHP Eventos | " . $event->title)

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            @if(!empty($event->image))
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-fluid">
            @else
                <div class="empty-image"></div>
            @endif
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{ $event->title }}</h1>
            <p class="event-city">
                <ion-icon name="pin"></ion-icon> {{ $event->city }}
            </p>
            <p class="events-participantes">
                <ion-icon name="people"></ion-icon> 50 participantes
            </p>
            <p class="event-owner">
                <ion-icon name="star-outline"></ion-icon> {{ $owner['name'] }}
            </p>

            <a href="#" class="btn btn-primary" id="event-submit">Confirmar Presença</a>

            <h3>O evento conta com:</h3>
            <ul id="items-list">
                @foreach($event->itens as $item)
                    <li><ion-icon name="play"></ion-icon> <span>{{ $item }}</span></li>
                @endforeach
            </ul>
        </div>

        <div class="col-md-12" id="description-container">
            <h3>Sobre o evento</h3>
            <p class="event-description">{{ $event->description }}</p>
        </div>
    </div>
</div>

@endsection
