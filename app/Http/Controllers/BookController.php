<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Editorial;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() //info de tabla o informacion de navegacion
    {
        $books = $this->read();
        return view('book.table', compact('books'));
    }
    public function register() //formulario de registro e informacion relacionada
    {
        $editorials = Editorial::all();
        return view('book.register', compact('editorials'));
    }
    public function edit($id) //formulario de edicion e informacion relacionada
    {
        $book = Book::find($id);
        return view('book.edit', compact('book'));
    }

    // metodos http crud
    public function create(Request $request)
    {
        $data = $this->validateForm($request);

        Book::insert($data);

        return redirect(route('bookIndex'));
    }
    public function read() // leer todas las entradas
    {
        return Book::all();
    }
    public function update($id, Request $request)
    {
        $data = $this->validateForm($request);
        Book::find($id)->update($data);

        return redirect(route('bookIndex'));
    }
    public function delete($id)
    {
        Book::find($id)->delete();
        return redirect(route('bookIndex'));
    }

    //metodos de ayuda

    public function validateForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:45',
            'year' => 'required|max:45',
            'ISBN' => 'required|max:45',
            'author' => 'required|max:45',
            'version' => 'required|max:45',
            'editorial_id' => 'required',
        ]);

        return $validatedData;
    }
}
