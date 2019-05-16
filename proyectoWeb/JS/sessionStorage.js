var nombreUsuario, edadUsuario, colorUsuario;

function inicio() {
    var btnGuardar1 = document.getElementById("btnGuardar");
    btnGuardar1.addEventListener('click', datosLocales);
}

function datosLocales() {
    recuperarDatos();
    guardarDatos();
}

function recuperarDatos() {
    nombreUsuario = document.getElementById('nombre').value;
    edadUsuario = document.getElementById('edad').value;
    colorUsuario = document.getElementById('color').value;
}

function guardarDatos() {
    sessionStorage.setItem("nombre1", nombreUsuario);
    sessionStorage.setItem("edad1", edadUsuario);
    sessionStorage.setItem("color1", colorUsuario);
    var nombre = document.getElementById('nombre');
    nombre.value = null;
    var edad = document.getElementById('edad');
    edad.value = null;
    var color = document.getElementById('color');
    color.value = null;
}
window.addEventListener('load', inicio);