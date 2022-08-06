@extends('templates.main')

@section('content')
    <div class="m-5">
        <h4 class="text-center">Libros Registrados</h4>
        <div class="text-end my-1">
            <a href="{{ route('bookRegister') }}" class="btn btn-primary">Agregar</a>
        </div>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Año</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Version</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
@endsection
