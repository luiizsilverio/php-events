@extends('layouts.main')

@section('title', 'PHP Eventos | Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Foto do evento:</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
        </div>
        <div class="form-group">
            <label for="date">Data do evento:</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form-group">
            <label for="city">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
        </div>
        <div class="form-group">
            <label for="private">O evento é privado?</label>
            <select class="form-control" id="private" name="private">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea class="form-control" id="description" name="description" placeholder="O que vai acontecer no evento?"></textarea>
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
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>

@endsection
