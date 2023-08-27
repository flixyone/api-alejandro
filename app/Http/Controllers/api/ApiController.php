<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function informacionPokemon($id)
    {
        if (Auth::check()) {
            return view('vista_api_pokemones.informacionPokemon', compact('id'));
        } else {
            return redirect()->route('login')->with('noLogueado', 'Lo sentimos no puedes realizar esta acción debes de iniciar sessión primero');
        }
    }
}
