@extends('templates.main')

@section('content')
    <div class="m-5">
        <h3 class="text-center">Edición de Libro</h3>
        <form class="mx-5" method="POST" action="/">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="description">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $book->name }}">
            </div>
            <div class="form-group">
                <label for="description">Año</label>
                <input type="text" class="form-control" id="year" name="year" value="{{ $book->year }}">
            </div>
            <div class="form-group">
                <label for="description">ISBN</label>
                <input type="text" class="form-control" id="ISBN" name="ISBN" value="{{ $book->ISBN }}">
            </div>
            <div class="form-group">
                <label for="description">Autor</label>
                <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}">
            </div>
            <div class="form-group">
                <label for="description">Version</label>
                <input type="text" class="form-control" id="version" name="version" value="{{ $book->version }}">
            </div>

            <div class="p-3 text-center">
                <input type="submit" class="btn btn-primary" placeholder="Guardar"></input>
                <a href="{{ route('bookIndex') }}" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
