function iniciaGeo() {
    var btnObtener1 = document.getElementById("btnObtener");
    btnObtener1.addEventListener('click', obtenerGeo, false);
}

function obtenerGeo() {
    navigator.geolocation.getCurrentPosition(mostrar, errores);
}

function mostrar(posicion) {
    var ubicacion1 = document.getElementById('ubicacion');
    var mapurl = "http://maps.google.com/maps/api/staticmap?" + "center=" +
        posicion.coords.latitude + ',' + posicion.coords.longitude + "&zoom=12&size=400x400" +
        "&sensor=false&markers=" + posicion.coords.latitude + posicion.coords.longitude;
    ubicacion1.innerHTML = '<img src=' + mapurl + ">";
}

function errores() {
    alert("ERROR: " + error.code + ",        " + error.message);
}
window.addEventListener('load', iniciaGeo);