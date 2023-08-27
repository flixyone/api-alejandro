<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/pokemones/informacionPokemon.css')}}">
    <link rel="shortcut icon" href="{{asset('img/icono.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <title>Información Pokemon</title>
</head>

<body>

    <div class="pokemon" id="{{ $id }}">{{$id}}</div>
    <div class="container">
        <div class="container_cart">
            <div class="name"></div>
            <img class="img"></img>
            <div class="abilities"></div>
        </div>
        <a href="{{route('listaPokemones')}}" id="salir">Volver a lista de pokemones <i class="bi bi-house-fill"></i></a>
    </div>


    <script src="{{ asset('js/informacionPokemon.js') }}"></script>
</body>
</html>
