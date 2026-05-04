<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Supongamos que tienes un modelo llamado Movie
use App\Models\Movie;

class MovieController extends Controller
{
    // Método para mostrar todo el catálogo
    public function index()
    {
        $peliculas = Movie::all();
        return response()->json($peliculas);
    }

    // Método para buscar por ID
    public function show($id)
    {
        $pelicula = Movie::find($id);

        if (!$pelicula) {
            return response()->json(['message' => 'Película no encontrada'], 404);
        }

        return response()->json($pelicula);
    }

    // Método para buscar por nombre
    public function searchByName(Request $request)
    {
        $nombre = $request->query('nombre');
        $peliculas = Movie::where('nombre', 'LIKE', "%{$nombre}%")->get();

        return response()->json($peliculas);
    }
}
