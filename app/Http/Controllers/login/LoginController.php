<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use App\Http\Requests\GuardarUsuarioRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('vista_usuario.login');
    }

    public function verificarLogin(Request $request)
    {
        $datosUsuario = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:20',
        ]);

        if (Auth::attempt($datosUsuario)) {
            $usuarioLogueado = Auth::user();
            $request->session()->put('usuarioLogueado', $usuarioLogueado);
            return redirect()->route('listaPokemones')->with('logueado', 'A iniciado sesión correctamente.');
        }

        return back()->withErrors([
            'email' => 'Correo no valido',
            'password' => 'Contraseña incorrecta',
        ])->onlyInput('email', 'password');
    }

    public function crearUsuario()
    {
        return view('vista_usuario.registrarUsuario');
    }

    public function guardarUsuario(GuardarUsuarioRequest $request)
    {
        $datosUsuario = $request->validated();

        $datosUsuario["password"] = Hash::make($request->get('password'));

        User::create($datosUsuario);

        return redirect()->route('login')->with('usuarioCreado', 'La creación de la cuenta se realizó con éxito. ¡Accede a tu cuenta ahora mismo!');
    }

    public function finalizarSesionUsuario()
    {
        Auth::logout();

        session()->forget('usuarioLogueado');

        return redirect()->route('listaPokemones')->with('finalizarSesion', 'Se cerro la sesión correctamente');
    }
}
