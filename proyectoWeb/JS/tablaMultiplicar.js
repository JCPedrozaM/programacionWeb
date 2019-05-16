/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function iniciar(){
    var btnTabla1 = document.getElementById('btnTabla');
    btnTabla1.addEventListener('click',obtenerTabla);
}

function obtenerTabla(){
    var num1 = document.getElementById('numTexto').value;
    num1 = parseFloat(num1);
    if(isNaN(num1)){
        num1 = 0;
    }
    var i;
    var cadena = "";
    for (i = 0; i<=10; i++){
        cadena = cadena + i + " X " + num1 + " = " + (i*num1);
        cadena = cadena  + "\n";
    }
    var txtArea1 = document.getElementById('txtArea');
    txtArea1.value = cadena;
}

window.addEventListener('load',iniciar);
