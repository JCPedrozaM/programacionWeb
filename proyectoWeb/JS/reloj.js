/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function reloj(){
    var tiempo = new Date();
    var hora = tiempo.getHours();
    var minutos = tiempo.getMinutes();
    var segundos = tiempo.getSeconds();
    
    if(hora < 10){
        hora = '0' + hora;
    }
    if(minutos < 10){
        minutos = '0' + minutos;
    }
    if(segundos < 10){
        segundos = '0' + segundos;
    }
    
    var horaTexto = "Hora:" + hora + ":" + minutos + ":" + segundos;
    var seccionReloj1 = document.getElementById('seccionReloj');
    seccionReloj1.innerHTML = horaTexto;
    
    var repetir = setTimeout('reloj()','1000');
}

window.addEventListener('load',reloj);