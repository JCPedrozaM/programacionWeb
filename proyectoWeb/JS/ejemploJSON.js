var miObjeto;

function iniciar() {
    miObjeto = [{
            "nombrecomun": "cerdo",
            "nombrecientifico": "gorrinus",
            "imagen": "cerdo.jpg",
            "audios": "cerdo.mp3",
            "comida": "todo",
            "descrpcion": "animal cool"
        },
        {
            "nombrecomun": "caballo",
            "nombrecientifico": "equinus",
            "imagen": "caballo.jpg",
            "audios": "caballo.mp3",
            "comida": "alfalfa, pastos, granos",
            "descrpcion": "mamifero equino"
        },
        {
            "nombrecomun": "oveja",
            "nombrecientifico": "ovejus",
            "imagen": "oveja.jpg",
            "audios": "oveja.mp3",
            "comida": "alfalfa, pastos",
            "descrpcion": "mamifero lanudo"
        }
    ];
    var btnMostrarTabla1 = document.getElementById('btnMostrarTabla')
    btnMostrarTabla1.addEventListener('click', mostrarTabla);
    var btnBuscar1 = document.getElementById('btnBuscar');
    btnBuscar1.addEventListener('click', buscarAnimal);

    var btnBuscar2 = document.getElementById('btnBuscar1');
    btnBuscar2.addEventListener('click', buscarAnimal1);

    var btnGuardarLocal1 = document.getElementById('guardarLocal');
    btnGuardarLocal1.addEventListener('click', guardarDatos);
    mostrarDatosJSON();
}

function mostrarDatosJSON() {
    var divAimales1 = document.getElementById('divAnimales');
    var miJSON = JSON.stringify(miObjeto);
    divAimales1.innerHTML = miJSON;
}

function mostrarTabla() {
    var cadena = "";
    cadena = "<table>";
    for (i in miObjeto) {
        cadena = cadena + "<tr><td>";
        cadena = cadena + miObjeto[i].nombrecomun;
        cadena = cadena + "</td>";
        cadena = cadena + "<td>";
        cadena = cadena + miObjeto[i].nombrecientifico;
        cadena = cadena + "</td>";
        cadena = cadena + "<td>";
        cadena = cadena + "<img src='../imagenes/" + miObjeto[i].imagen + "'>";
        cadena = cadena + "</td>";
        cadena = cadena + "<td>";
        cadena = cadena + "<audio controls> <source src='../audios/" + miObjeto[i].audios + "'></audio>";
        cadena = cadena + "</td>";
        cadena = cadena + "<td>";
        cadena = cadena + miObjeto[i].comida;
        cadena = cadena + "</td>";
        cadena = cadena + "<td>";
        cadena = cadena + miObjeto[i].descrpcion;
        cadena = cadena + "</td>";
        cadena = cadena + "</tr>";
    }
    cadena = cadena + "</table>";
    var divTabla1 = document.getElementById('divTabla');
    divTabla1.innerHTML = cadena;
}

function buscarAnimal() {
    var encontrado = false;
    var animalBuscado = document.getElementById('nombreBuscar').value;
    var divBuscar1 = document.getElementById('divBuscar');
    for (i in miObjeto) {
        if (animalBuscado === miObjeto[i].nombecomun) {
            encontrado = true;
            divBuscar1.innerHTML = "Se encontró: " + miObjeto[i].nombecomun +
                " y su descripción: " + miObjeto[i].descripcion;
            return;
        }
    }
    if (encontrado === false) {
        divBuscar1.innerHTML = "No Se encontró: " + animalBuscado;
    }
}

function buscarAnimal1() {
    var encontrado1 = false;
    var resultado = "";
    animalBuscado1 = document.getElementById('nombreBuscar1').value;
    var divBuscar1 = document.getElementById('divBuscar1');
    for (i in miObjeto) {
        var cadena = miObjeto[i].comida.indexOf(animalBuscado1);
        if (cadena >= 0) {
            encontrado1 = true;
            resultado = resultado + "Se encontró : " + miObjeto[i].nombecomun +
                " y su comida: " + miObjeto[i].comida + "<br>";
        }
    }
    if (encontrado1 == true) {
        divBuscar1.innerHTML = resultado;
    }
    if (encontrado1 == false) {
        divBuscar1.innerHTML = "No se encontró";
    }
}

function guardarDatos() {
    var miJSON = JSON.stringify(miObjeto);
    localStorage.setItem("miDatosJSON", miJSON);
}

window.addEventListener('load', iniciar)