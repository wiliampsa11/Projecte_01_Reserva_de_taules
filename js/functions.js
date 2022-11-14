window.onload = function() {
    salon.style.display = 'flex';
    terraza.style.display = 'none';
    sala_privada_1.style.display = 'none';
    sala_privada_2.style.display = 'none';
    div_filtros.style.display = 'none';
}

// VARIBALES DE LOS BOTONES DE LOS MAPAS
var btn_salon = document.getElementById('btn_salon');
var btn_terraza = document.getElementById('btn_terraza');
var btn_privada_1 = document.getElementById('btn_privada-1');
var btn_privada_2 = document.getElementById('btn_privada-2');

// DEFINIR TODAS LAS VARIABLES DE LAS DIFERENTES TABLAS DE INICIO
var salon = document.getElementById('salon');
var terraza = document.getElementById('terraza');
var sala_privada_1 = document.getElementById('sala-privada-1');
var sala_privada_2 = document.getElementById('sala-privada-2');

// ABRIR MODAL RESERVAS
$(document).ready(function() {
    $('.trigger').on('click', function() {
        $('.modal-wrapper').toggleClass('open');
        $('.page-wrapper').toggleClass('blur-it');
        return false;
    });
});

// ENVIAR ID MESA
$("button").click(function() {
    var mesa = $(this).val();
    const input = document.createElement("input")
    input.type = "hidden";
    input.name = "mesa"
    input.value = mesa;
    const form = document.querySelector('#form1');
    form.insertAdjacentElement("afterbegin", input);

});

btn_salon.addEventListener('click', () => {
    salon.style.display = 'flex';
    terraza.style.display = 'none';
    sala_privada_1.style.display = 'none';
    sala_privada_2.style.display = 'none';
});

btn_terraza.addEventListener('click', () => {
    salon.style.display = 'none';
    terraza.style.display = 'flex';
    sala_privada_1.style.display = 'none';
    sala_privada_2.style.display = 'none';
});

btn_privada_1.addEventListener('click', () => {
    salon.style.display = 'none';
    terraza.style.display = 'none';
    sala_privada_1.style.display = 'flex';
    sala_privada_2.style.display = 'none';
});

btn_privada_2.addEventListener('click', () => {
    salon.style.display = 'none';
    terraza.style.display = 'none';
    sala_privada_1.style.display = 'none';
    sala_privada_2.style.display = 'flex';
});

for (var i = 0, len = localStorage.length; i < len; i++) {
    var key = localStorage.key(i);
    var value = localStorage[key];
    if (value == 'Ocupado') {
        document.getElementById(key).classList.add(value);
    } else if (value == 'Averiado') {
        document.getElementById(key).classList.add(value);
    }
}

// FUNCIÓN VALIDAR CAMPOS RESERVAS
function validarReserva() {
    var validacion = true;
    // RECOGER CAMPOS Y VALORES DE LOS CAMPOS
    var value_nombre = document.getElementById('nombre').value;
    var value_apellidos = document.getElementById('apellidos').value;
    var value_telefono = document.getElementById('telefono').value;
    // COMPROBACIONES:
    if (value_nombre == null || value_apellidos == null || value_telefono == null) {
        alert("Falta algún dato para hacer tu reserva, revisa el formulario y envialo de nuevo!");
        validacion = false;
    } else if (value_telefono.length != 9) {
        alert("El teléfono que has introducido no es válido!");
        validacion = false
    }

    if (!validacion) {
        return false;
    } else {

    }
}

function abrirFiltros() {
    var btn_filtros = document.getElementById('filtros');
    var div_filtros = document.getElementById('div-filtros');

    div_filtros.classList.toggle('mostrar_filtros');
}