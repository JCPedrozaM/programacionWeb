/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//window.alert("Hola. Bienvenido a la página");

function nombre() {
    var persona = {nombre: "Carlos", aPat: "Pedroza", aMat: "Marroquín"};
    document.getElementById('nombre').innerHTML = "Nombre: " + persona.nombre + "<br> Apellido Paterno: " + persona.aPat + "<br> Apellido Materno: " + persona.aMat;
}
window.addEventListener('load', nombre);

function posicion() {
    var str = "Este es un 'texto' prueba (Para la posición los espacios en blanco cuentan y la posición es por carácter)";
    var pos = str.indexOf("texto");
    document.getElementById("posicion").innerHTML = "La posición de la palabra texto es: " + pos;
}
window.addEventListener('load', posicion);

function reemplazar() {
    var str = document.getElementById("reemplazar").innerHTML;
    var txt = str.replace("Holaaa!", "Adiooos!");
    document.getElementById("reemplazar").innerHTML = txt;
}

function infinito() {
    var myNumber = 2;
    var txt = "";
    while (myNumber != Infinity) {
        myNumber = myNumber * myNumber;
        txt = txt + myNumber + "<br>";
    }
    document.getElementById("infinito").innerHTML = txt;
}
window.addEventListener('load', infinito);

function arreglo() {
    var cars = ["Saab", "Volvo", "BMW"];
    document.getElementById("arreglo").innerHTML = cars;
}
window.addEventListener('load', arreglo);

function arreglo2() {
    var cars = ["Saab", "Volvo", "BMW"];
    document.getElementById("arreglo2").innerHTML = cars;
}
window.addEventListener('load', arreglo2);

function arregloPop(){
    var cars = ["Saab", "Volvo", "BMW"];
    cars.pop();
    document.getElementById("arregloPop").innerHTML = cars;
}
window.addEventListener('load', arregloPop);

function arreglo3() {
    var cars = ["Saab", "Volvo", "BMW"];
    document.getElementById("arreglo3").innerHTML = cars;
}
window.addEventListener('load', arreglo3);

function arregloPush(){
    var cars = ["Saab", "Volvo", "BMW"];
    cars.push("Audi");
    document.getElementById("arregloPush").innerHTML = cars;
}
window.addEventListener('load', arregloPush);

function ordenarAsc(){
    var fruits = ["Banana", "Orange", "Apple", "Mango"];
    fruits.sort();
    document.getElementById("ordenar").innerHTML = fruits;
}

function ordenarDesc(){
    var fruits = ["Banana", "Orange", "Apple", "Mango"];
    fruits.reverse();
    document.getElementById("ordenar").innerHTML = fruits;
}