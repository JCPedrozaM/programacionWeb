var txtForEach = "";

function iterationForEach() {
    var numbers = [4, 18, 24, 19, 98];
    numbers.forEach(leer);
    document.getElementById("forEach").innerHTML = txtForEach;
}

function leer(value, index, array) {
    txtForEach += value + "<br>";
}

function iterationFilter() {
    var numbers = [4, 18, 24, 19, 98];
    var mayor20 = numbers.filter(filtrar);
    document.getElementById("filter").innerHTML = mayor20;
}

function filtrar(value, index, array) {
    return value > 20;
}

function fecha() {
    var d = new Date();
    var year = d.getFullYear();
    var mes = d.getMonth() + 1;
    var dia = d.getDay();
    var hora = d.getHours();
    var min = d.getMinutes();
    d.setFullYear(2024);
    document.getElementById("fecha").innerHTML = d;
    document.getElementById("mFecha").innerHTML = "año: " + year + "<br> mes: " + mes + "<br> día: " + dia + "<br> hora: " + hora + "<br> minutos: " + min + "<br> fecha modificada: " + d;
}

function mate() {
    document.getElementById('math').innerHTML = "PI: " + Math.PI + "<br> Aleatorio: " + Math.random() + "<br> 2^3: " + Math.pow(2, 3) + "<br> Raíz 16: " + Math.sqrt(16);
}

function comparar() {
    document.getElementById('comp').innerHTML = "10 > 4 = " + Boolean(10 > 4) + "<br> 2 < 1 = " + Boolean(2 < 1) + "<br> 5 == 5 = " + Boolean(5 == 5) + "<br> 6 != 6 = " + Boolean(6 != 6);
}

function compararNum() {
    var num = document.getElementById('num').value;
    if (num > 4) {
        document.getElementById('si').innerHTML = "El número es mayor que 4"
    } else {
        document.getElementById('si').innerHTML = "El número es menor que 4"
    }
}

function determinarDia() {
    switch (new Date().getDay()) {
        case 0:
            day = "Domingo";
            break;
        case 1:
            day = "Lunes";
            break;
        case 2:
            day = "Martes";
            break;
        case 3:
            day = "Miercoles";
            break;
        case 4:
            day = "Jueves";
            break;
        case 5:
            day = "Viernes";
            break;
        case 6:
            day = "Sábado";
    }
    document.getElementById("dia").innerHTML = "El día de hoy es: " + day;
}

function recorrerArray() {
    var cars = ["BMW", "Volvo", "Saab", "Ford", "Fiat", "Audi"];
    var text = "";
    var i;
    for (i = 0; i < cars.length; i++) {
        text += cars[i] + "<br>";
    }
    document.getElementById("for").innerHTML = text;
}

function numWhile() {
    var text = "";
    var i = 0;
    while (i < 25) {
        text += "<br>El número es " + i;
        i++;
    }
    document.getElementById("numeros").innerHTML = text;
}

function tipos() {
    document.getElementById("tipos").innerHTML =
        typeof "john" + "<br>" +
        typeof 3.14 + "<br>" +
        typeof NaN + "<br>" +
        typeof false + "<br>" +
        typeof [1, 2, 3, 4] + "<br>" +
        typeof { name: 'john', age: 34 } + "<br>" +
        typeof new Date() + "<br>" +
        typeof

    function() {} + "<br>" +
    typeof myCar + "<br>" +
        typeof null;
}

function convertir() {
    var num = document.getElementById('numDec').value;
    document.getElementById("binario").innerHTML = dec2bin(num);
}

function dec2bin(dec) {
    return (dec >>> 0).toString(2);
}

function cambiarTexto() {
    var str = document.getElementById("textoNombre").innerHTML;
    var txt = str.replace("José", "Carlos");
    document.getElementById("textoNombre").innerHTML = txt;
}

function errores() {
    try {
        agregarAlerta("Welcome guest!");
    } catch (err) {
        document.getElementById("error").innerHTML = err.message;
    }
}


function cargar() {
    iterationForEach();
    iterationFilter();
    fecha();
    mate();
    comparar();
    tipos();
    errores()
}
window.addEventListener('load', cargar);