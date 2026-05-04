<?php

use Illuminate\Support\Facades\Route;
// Importamos el controlador de películas
use App\Http\Controllers\MovieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// 1. Ruta para mostrar el catálogo completo (Método index)
Route::get('/peliculas', [MovieController::class, 'index']);

// 2. Ruta para buscar una película por su ID
Route::get('/peliculas/{id}', [MovieController::class, 'show']);

// 3. Ruta para buscar una película por su nombre
Route::get('/buscar-pelicula/{nombre}', [MovieController::class, 'searchByName']);
