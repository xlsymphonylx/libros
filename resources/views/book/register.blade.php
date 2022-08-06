@extends('templates.main')

@section('content')
    <div class="m-5">
        <h3 class="text-center">Formulario de Libro</h3>
        <form class="mx-5" method="POST" action="{{ route('bookCreate') }}">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="description">Nombre</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="description">Año</label>
                <input type="text" class="form-control" id="year" name="year">
            </div>
            <div class="form-group">
                <label for="description">ISBN</label>
                <input type="text" class="form-control" id="ISBN" name="ISBN">
            </div>
            <div class="form-group">
                <label for="description">Autor</label>
                <input type="text" class="form-control" id="author" name="author">
            </div>
            <div class="form-group">
                <label for="description">Version</label>
                <input type="text" class="form-control" id="version" name="version">
            </div>
            <div class="form-group my-3">
                <label for="category_id">Editorial</label>
                <select class="form-control" id="editorial_id" name="editorial_id">
                    <option selected disabled>Elija un Opcion</option>
                    @foreach ($editorials as $editorial)
                        <option value="{{ $editorial->id }}">
                            {{ $editorial->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="p-3 text-center">
                <input type="submit" class="btn btn-primary" placeholder="Guardar"></input>
                <a href="{{ route('bookIndex') }}" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
