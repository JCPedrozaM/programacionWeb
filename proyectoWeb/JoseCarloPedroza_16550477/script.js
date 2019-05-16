var alto;
var ancho;
var num = 0;


function dibujar() {
    document.getElementById("dibujo").innerHTML = "";
    var rectangulo = "";
    var fila = "";
    alto = document.getElementById("alto").value;
    ancho = document.getElementById("ancho").value;
    for (var i = 0; i < ancho; i++) {
        fila += "*";
    }
    for (var j = 0; j < alto; j++) {
        rectangulo += fila + "<br>";
    }
    document.getElementById("dibujo").innerHTML = rectangulo;
    num++;
    document.getElementById("numero").innerHTML = "Dibujos: " + num;
    document.getElementById("perimetro").innerHTML = "Perimetro Actual: " + (alto * 2 + ancho * 2);
    document.getElementById("area").innerHTML = "Área Actual: " + (alto * ancho);
}