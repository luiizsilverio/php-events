@extends('layouts.main')

@section('title', 'PHP Eventos | Alteração de Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Alteração do Evento</h1>
    <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Foto do evento:</label>
            <input type="file" class="form-control-file" id="image" name="image">
            <img src="/img/events/{{ $event->image }}" alt="Foto do evento" class="img-preview">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text"
                class="form-control"
                id="title" name="title"
                value="{{ $event->title }}"
                placeholder="Nome do evento"
            >
        </div>
        <div class="form-group">
            <label for="date">Data do evento:</label>
            <input type="date"
                id="date" name="date"
                value="{{ date('Y-m-d', strtotime($event->date)) }}"
                class="form-control"
            >
        </div>
        <div class="form-group">
            <label for="city">Cidade:</label>
            <input type="text"
                id="city" name="city"
                value="{{ $event->city }}"
                class="form-control"
                placeholder="Local do evento"
            >
        </div>
        <div class="form-group">
            <label for="private">O evento é privado?</label>
            <select class="form-control" id="private" name="private">
                <option value="0">Não</option>
                <option value="1" {{ $event->private == 1 ? "selected='selected'" : "" }}>Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea
                id="description" name="description"
                class="form-control"
                placeholder="O que vai acontecer no evento?"
                rows="6"
            >{{ $event->description }}
            </textarea>
        </div>
        <div class="form-group">
            <label for="itens">Adicione itens de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="itens[]" id="itens" value="Cadeiras"> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" id="itens" value="Palco"> Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" id="itens" value="Banda de Música"> Banda de Música
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" id="itens" value="Retroprojetor"> Retroprojetor
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" id="itens" value="Buffet"> Buffet
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Confirmar Evento">
    </form>
</div>

@endsection
