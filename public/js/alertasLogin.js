function eliminarAlerta(elementID) {
    var elemento = document.getElementById(elementID);
    if (elemento) {
        setTimeout(function () {
            elemento.style.display = 'none';
        }, 6000);
    }
}

eliminarAlerta('mensaje_succes');
eliminarAlerta('mensaje_danger');