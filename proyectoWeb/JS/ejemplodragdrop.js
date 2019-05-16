/* 
ejemplodragdrop.js
 */

var origen1;
var destino1;
function iniciar (){
     origen1 = document.getElementById('imagen');
     origen1.addEventListener('dragstart', arrastrado, false);
     
     destino1 = document.getElementById('cajasoltar');
     destino1.addEventListener('dragenter', 
            function(e) {
                e.preventDefault(); 
            }
                    ,false  );
            destino1.addEventListener('dragover', 
            function(e) {
                e.preventDefault(); 
            }
                    ,false);
            destino1.addEventListener('drop', soltado, false);
    
    }
    function arrastrado(e){
        var codigo = '<img src="' + origen1.getAttribute('src') + '">';
        e.dataTransfer.setData('Text', codigo);
    }
    function soltado(e){
        e.preventDefault();
        destino1.innerHTML = e.dataTransfer.getData('Text');
    }

window.addEventListener('load', iniciar);


