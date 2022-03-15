@extends('layouts.main')

@section('title', 'Create')

@section('content')

<div id="event-creat-container" class="col-md-6 offset-md-3">
    <h1>Crie seu evento</h1>
    <form method="POST" enctype="multipart/form-data" action="/events">
        @csrf
        <div class="form-group">
            <label for="image_events">Imagem do Evento:</label>
            <input accept="image/*" type="file" class="form-control" id="image_events" name="image_events" required>
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
        </div>
        <div class="form-group">
            <label for="title">O evento é privado?</label>
            <select name="private" id="pivate" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar evento">
    </form>
</div>

@endsection
