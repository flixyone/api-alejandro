<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/usuario/registrarUsuario.css') }}">
    <link rel="shortcut icon" href="{{asset('img/icono_login.png')}}" type="image/x-icon">
    <title>Registrate</title>
</head>

<body>
    <div id="contenedor_general">
        <div id="contenedor">
            <div id="contenedor_login">
                <div class="titulo">
                    Crea tu usuario
                </div>
                <form id="registerform" action="{{route('guardarUsuario')}}" method="POST">
                    @csrf

                    <input type="text" name="name" placeholder="Ingresa tu nombre" required>

                    <input type="email" name="email" placeholder="Ingresa tu correo electronico" required>

                    <input type="password" placeholder="Indica tu contraseña" name="password" required>

                    <button type="submit" title="Registrar" name="Registrar">Crear Cuenta</button>
                </form>
                <div class="pie-form">
                    <a href="{{ route('login') }}">¿Ya tienes cuenta? Accede ahora</a>
                    <a href="{{ route('listaPokemones') }}">INICIO</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>