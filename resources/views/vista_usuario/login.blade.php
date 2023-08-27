<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/login/login.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('img/icono_login.png') }}" type="image/x-icon">
    <title>Login</title>
</head>

<body>

    @if (session('usuarioCreado'))
        <div class="alerta_succes">
            <h1 id="mensaje_succes">{{ session('usuarioCreado') }} <i class="bi bi-check2-square"></i></h1>
        </div>
    @endif

    @if (session('noLogueado'))
        <div class="alerta_danger">
            <h1 id="mensaje_danger">{{ session('noLogueado') }} <i class="bi bi-emoji-laughing"></i></h1>
        </div>
    @endif

    <div id="contenedor_general">
        <div id="contenedor">
            <div id="contenedor_login">
                <div class="titulo">
                    Inicio Sesión
                </div>
                <form id="loginform" action="{{ route('verificarLogin') }}" method="POST">

                    @csrf

                    <input type="email" name="email" placeholder="Correo Electronico" required>
                    @if ($errors->has('email'))
                        <div class="mensaje_error"><i class="bi bi-x-circle"></i> {{ $errors->first('email') }}</div>
                    @endif

                    <input type="password" placeholder="Contraseña" name="password" required>
                    @if ($errors->has('password'))
                        <div class="mensaje_error"><i class="bi bi-x-circle"></i> {{ $errors->first('password') }}</div>
                    @endif

                    <button type="submit" title="Ingresar" name="Ingresar">Iniciar Sesión</button>

                </form>

                <div class="pie-form">
                    <a href="{{ route('crearUsuario') }}">¿No tienes Cuenta? Registrate</a>
                    <a href="{{ route('listaPokemones') }}">INICIO</a>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/alertasLogin.js') }}"></script>

</body>

</html>
