/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var cara = 0;
var aguila = 0;
var total = 0;

function agregarEscuchadorBoton(){
    var btnLanzar1 = document.getElementById("btnLanzar");
    btnLanzar1.addEventListener('click',lanzarMoneda);
}

function lanzarMoneda(){
    var num = Math.random();
    var imagenMoneda = document.getElementById("moneda");
    if(num <= 0.5){
        imagenMoneda.src = "../imagenes/monedaCara.jpg";
        cara++;
    }else{
        imagenMoneda.src = "../imagenes/monedaAguila.jpg";
        aguila++;
    }
    total++;
    mostrarEstadistica();
    mostrargraficas();
}

function mostrarEstadistica(){
    var sectionAguila = document.getElementById("sectionAguila");
    var sectionCara = document.getElementById("sectionCara");
    var sectionTotal = document.getElementById("sectionTotal");
    sectionAguila.innerHTML = "Águilas: " + aguila;
    sectionCara.innerHTML = "Caras: " + cara;
    sectionTotal.innerHTML = "Total: " + total;
}

function mostrargraficas(){
    var rangoAguilas = document.getElementById("rangoAguila");
    var rangoCaras = document.getElementById("rangoCara");
    rangoAguilas.value = Math.round((aguila/total * 100));
    rangoCaras.value = Math.round((cara/total * 100));
    var porcentajeAguilas = document.getElementById("porcentajeAguila");
    var porcentajeCaras = document.getElementById("porcentajeCara");
    porcentajeAguilas.innerHTML = Math.round((aguila/total * 100)) + "%";
    porcentajeCaras.innerHTML = Math.round((cara/total * 100)) + "%";
}

window.addEventListener('load',agregarEscuchadorBoton);
