window.onload = function() {
    salon.style.display = 'flex';
    terraza.style.display = 'none';
    sala_privada_1.style.display = 'none';
    sala_privada_2.style.display = 'none';
}

// VARIBALES DE LOS BOTONES DE LOS MAPAS
var btn_salon = document.getElementById('btn_salon');
var btn_terraza = document.getElementById('btn_terraza');
var btn_privada_1 = document.getElementById('btn_privada-1');
var btn_privada_2 = document.getElementById('btn_privada-2');

// DEFINIR TODAS LAS VARIABLES DE LAS DIFERENTES TABLAS DE INICIO
var salon = document.getElementById('salon');
var terraza = document.getElementById('terraza');


// enviar id mesa

$(document).ready(function() {
    $('.trigger').on('click', function() {
        $('.modal-wrapper').toggleClass('open');
        $('.page-wrapper').toggleClass('blur-it');
        return false;
    });
});
$("button").click(function() {
    var mesa = $(this).val();
    const input = document.createElement("input")
    input.type = "hidden";
    input.name = "mesa"
    input.value = mesa;
    const form = document.querySelector('#form1');
    form.insertAdjacentElement("afterbegin", input);
    const ocuBtn = document.querySelector("#Ocu");
    const libBtn = document.querySelector("#Lib");
    const aveBtn = document.querySelector("#Ave");
    ocuBtn.addEventListener("click", function() {
        localStorage.setItem(mesa, ocuBtn.value);

    });
    libBtn.addEventListener("click", function() {
        localStorage.setItem(mesa, libBtn.value);

    });
    aveBtn.addEventListener("click", function() {
        localStorage.setItem(mesa, aveBtn.value);

    });

});

// 
var sala_privada_1 = document.getElementById('sala-privada-1');
var sala_privada_2 = document.getElementById('sala-privada-2');

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


// Cambio de colores

for (var i = 0, len = localStorage.length; i < len; i++) {
    var key = localStorage.key(i);
    var value = localStorage[key];
    if (value == 'Ocupado') {
        document.getElementById(key).classList.add(value);
    } else if (value == 'Averiado') {
        document.getElementById(key).classList.add(value);
    }
}