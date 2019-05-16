function mostrar() {
    var divnombre1 = document.getElementById('divNombre');
    var nombreUsuario = localStorage.getItem('nombre1');
    var divEdad1 = document.getElementById('divEdad');
    var edadUsuario = localStorage.getItem('edad1');
    var cuerpo1 = document.getElementById('cuerpo');
    var colorUsuario = localStorage.getItem('color1');
    divnombre1.innerHTML = nombreUsuario;
    divEdad1.innerHTML = edadUsuario;
    cuerpo1.style.backgroundColor = colorUsuario;

    var n2 = localStorage.getItem('nombre2');
    if (n2 == null || n2 == "") {
        alert('No existe n2: ' + n2);
    }

    var btnMostrarTodos1 = document.getElementById("btnMostrarTodos");
    btnMostrarTodos1.addEventListener('click', mostrarTodos);
}

function mostrarTodos() {
    var num = localStorage.length;
    var cadena = "";
    for (var i = 0; i < num; i++) {
        var nombreVariable = sessionStorage.key(i);
        var valorVariable = sessionStorage.getItem(nombreVariable);
        cadena += nombreVariable + "  =  " + valorVariable + "<br>";
    }
    var divResultado = document.getElementById("todosDatosSesion");
    divResultado.innerHTML = cadena;
}
window.addEventListener('load', mostrar);