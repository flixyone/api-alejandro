<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemones</title>
    <link rel="shortcut icon" href="{{asset('img/icono_principal.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/pokemones/listadoPokemones.css')}}">
</head>

<body>

    @if (session('logueado'))
        <div class="AlertaInicioSession">
            <h1 id="mensajeAlertaInicioSession">{{ session('logueado') }}</h1>
        </div>
    @endif

    <div class="menu">
        @guest
            <a href="{{ route('crearUsuario') }}">Crear Usuario</a>
            <a href="{{ route('login') }}">Inicia Sesión</a>
        @else
            <a href="{{ route('finalizarSesionUsuario') }}">Salir</a>
        @endguest
    </div>

    <div class="pokemon-container"></div>

    <div id="spinner" class="spinner-border text-light" role="status">
        <span class="visually-hidden">Espera estamos cargando la información...</span>
    </div>

    <script src="{{asset('js/listaPokemon.js')}}"></script>
</body>
</html>
