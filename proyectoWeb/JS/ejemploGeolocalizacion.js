function iniciaGeo() {
    var btnObtener1 = document.getElementById("btnObtener");
    btnObtener1.addEventListener('click', obtenerGeo, false);
}

function obtenerGeo() {
    navigator.geolocation.getCurrentPosition(mostrar);
}

function mostrar(posicion) {
    var ubicacion1 = document.getElementById('ubicacion');
    var datos = "";
    datos += "Latitud: " + posicion.coords.latitude + "<br>";
    datos += "Longitud: " + posicion.coords.longitude + "<br>";
    datos += "Exactitud: " + posicion.coords.accuracy + "mts <br>";
    ubicacion1.innerHTML = datos;
}
window.addEventListener('load', iniciaGeo);