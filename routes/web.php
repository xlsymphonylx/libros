<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('/book')->group(
    function () {
        Route::get('/', function () {
            return view('book.table');
        })->name('bookIndex'); //esto es la tabla de book 

        Route::get('/register', function () {
            return view('book.register');
        })->name('bookRegister'); // formulario de ingreso 

        Route::get('/edit/{id}', function () {
            return view('book.edit');
        })->name('bookEdit');/* formulario de editar (difiere de update, en que 
        edit es la forma visual de cambiar datos y update es registrar esos datos cambiados en la bd) */


        // Rutas http, peticiones al servidor
        // Route::post('/create', [bookController::class, 'create'])->name('bookCreate'); // ruta http de Create book

        // // Route::get('/read', function () {
        // // })->name('bookRead'); //ruta http de Read book

        // Route::patch('/update/{id}', [bookController::class, 'update'])->name('bookUpdate'); // ruta http de Update book

        // Route::delete('/delete/{id}', [bookController::class, 'delete'])->name('bookDelete'); // ruta http de Delete book
    }
);
