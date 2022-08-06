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
                    <th scope="col">Editorial</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <th scope="row">{{ $book->id }}</th>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->year }}</td>
                        <td>{{ $book->ISBN }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->version }}</td>
                        <td>{{ $book->editorial->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
