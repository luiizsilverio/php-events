@extends('layouts.main')

@section('title', 'PHP Eventos | Dashboard')

@section('content')

    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Meus Eventos</h1>
    </div>

    <div class="col-md-10 offset-md-1 dashboard-events-container">
        @if(count($events) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Participantes</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                        <tr>
                            <td scropt="row">{{ $loop->index + 1 }}</td>
                            <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                            <td>{{ count($event->users) }}</td>
                            <td>
                                <a href="/events/edit/{{ $event->id }}" class="btn btn-info btn-sm edit-btn">
                                    <ion-icon name="create"></ion-icon>
                                    Editar
                                </a>
                                <form action="/events/{{ $event->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger delete-btn btn-sm">
                                        <ion-icon name="trash"></ion-icon>
                                        Excluir
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h5>Você ainda não tem eventos, <a href="/events/create">criar evento</a></h5>
        @endif
    </div>

    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h2>Eventos que estou participando</h2>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-events-container">
        @if(count($eventsasparticipant) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Participantes</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($eventsasparticipant as $event)
                        <tr>
                            <td scropt="row">{{ $loop->index + 1 }}</td>
                            <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                            <td>{{ count($event->users) }}</td>
                            <td>
                                <form action="/events/leave/{{ $event->id }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-outline-danger delete-btn btn-sm">
                                        <ion-icon name="exit"></ion-icon>
                                        Sair do Evento
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h5>Você não está participando de nenhum evento.</h5>
        @endif
    </div>


@endsection
