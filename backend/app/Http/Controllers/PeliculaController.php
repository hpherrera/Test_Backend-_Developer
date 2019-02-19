<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function peliculas($genero)
    {

        /**
         *  Tambien se puede obtener todo los generos de la base de datos y comprobar si el genero se encuentra o no.
         */
        if($genero == 'Drama' || $genero == 'Comedia' || $genero == 'Acción' || $genero == 'Terror')
        {
            return response()->json(['success' => 'success , se puede realizar accion'], 200);
        }
        else{
            return response()->json(['error' => 'invalid'], 404);
        }
        
    }
    
}
