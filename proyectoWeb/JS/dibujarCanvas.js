var ancho = 0;
var alto = 0;
var radio = 0;

var x = 0;
var y = 0;
var escala = 0;
var angulo = 0;

function iniciar() {
    var btnDibujar1 = document.getElementById("btnDibujar");
    var btnBorrar1 = document.getElementById("btnBorrar");
    var btnTrasladar1 = document.getElementById("btnTrasladar");
    var btnEscalar1 = document.getElementById("btnEscalar");
    var btnRotar1 = document.getElementById("btnRotar");
    var btnMedidas1 = document.getElementById("btnMedidas");
    btnDibujar1.addEventListener('click', dibujarFigura);
    btnBorrar1.addEventListener('click', borrar);
    btnTrasladar1.addEventListener('click', trasladar);
    btnEscalar1.addEventListener('click', escalar);
    btnRotar1.addEventListener('click', rotar);
    btnMedidas1.addEventListener('click', medir);
}

function medir() {
    var figuraNombre = document.getElementById("selectFigura").value;
    if (figuraNombre == 'rectangulo') {
        ancho = prompt("Ancho: ", 0);
        alto = prompt("Altura: ", 0);
    }

    if (figuraNombre == 'circulo') {
        radio = prompt("Radio: ", 0)
    }

    if (figuraNombre == 'triangulo') {
        ancho = prompt("Ancho: ", 0);
        alto = prompt("Altura: ", 0);
    }
}

function dibujarFigura() {
    var canvas1 = document.getElementById("miCanvas");
    var contexto = canvas1.getContext("2d");
    var figuraColor = document.getElementById("colorFig").value;
    var figuraContorno = document.getElementById("contornoFig").value;
    var colorCanvas = document.getElementById("colorCanvas").value;
    var colorSombra1 = document.getElementById('colorSombra').value;
    var figuraNombre = document.getElementById("selectFigura").value;
    //alert("Figura: " + figuraNombre + ". Color" + figuraColor);
    contexto.clearRect(0, 0, 400, 300);
    contexto.fillStyle = colorCanvas;
    contexto.fillRect(0, 0, 400, 300);
    contexto.fillStyle = figuraColor;
    contexto.strokeStyle = figuraContorno;
    contexto.lineWidth = 3;
    contexto.shadowBlur = 20;
    contexto.shadowColor = colorSombra1;

    if (figuraNombre == 'rectangulo') {
        if (ancho <= 400 && alto <= 300) {
            contexto.rotate((angulo * (2 * Math.PI)) / 360);
            contexto.fillRect(x, y, ancho, alto);
            contexto.strokeRect(x, y, ancho, alto);
        } else {
            alert("Dimensiones no validas");
        }
    }

    if (figuraNombre == 'circulo') {
        contexto.beginPath();
        if (radio <= 150) {
            contexto.arc(200, 150, radio, 0, Math.PI * 2, false);
            contexto.fill();
            contexto.stroke();
        } else {
            alert("Dimensiones no validas");
        }
    }

    if (figuraNombre == 'triangulo') {
        contexto.beginPath();
        if (ancho <= 400 && alto <= 300) {
            contexto.rotate((angulo * (2 * Math.PI)) / 360);
            contexto.moveTo(ancho, 0);
            contexto.lineTo(x, y);
            contexto.lineTo(x, alto);
            contexto.fill();
            contexto.moveTo(ancho, y);
            contexto.stroke();
            contexto.lineTo(x, y);
            contexto.stroke();
            contexto.lineTo(x, alto);
            contexto.stroke();
            contexto.lineTo(ancho, y);
            contexto.stroke();
        } else {
            alert("Dimensiones no validas");
        }
    }

    if (figuraNombre == 'beziercuad') {
        contexto.lineWidth = 5;
        contexto.beginPath();
        contexto.moveTo(0, 0);
        contexto.quadraticCurveTo(200, 500, 400, 0);
        contexto.stroke();
    }
    if (figuraNombre == 'beziercub') {
        contexto.lineWidth = 5;
        contexto.beginPath();
        contexto.moveTo(0, 0);
        contexto.bezierCurveTo(0, 700, 200, -300, 400, 300);
        contexto.stroke();
    }
}

function borrar() {
    var canvas1 = document.getElementById("miCanvas");
    var contexto = canvas1.getContext("2d");
    contexto.clearRect(0, 0, 400, 300);
}

function trasladar() {
    var canvas1 = document.getElementById("miCanvas");
    var contexto = canvas1.getContext("2d");
    x = prompt("Posición X: ", 0);
    y = prompt("Posición Y: ", 0);
    dibujarFigura();
}

function escalar() {
    escala = prompt("Escala: ", 0);
    ancho *= escala;
    alto *= escala;
    radio *= escala;
    dibujarFigura();
}

function rotar() {
    angulo = prompt("Angulo: ", 0);
    dibujarFigura();
}
window.addEventListener('load', iniciar);