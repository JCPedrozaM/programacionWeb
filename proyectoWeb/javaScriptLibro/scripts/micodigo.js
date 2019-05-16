function hacerclic() {
    document.querySelector("#principal p: first-child").onclick = mostraralerta;
}

function mostraralerta() {
    alert('hizo clic!');
}
window.onload = hacerclic;

/*
function hacerclic() {
    var lista = document.querySelectorAll("#principal p");
    lista[0].onclick = mostraralerta;
}

function mostraralerta() {
    alert('hizo clic!');
}
window.onload = hacerclic;

function hacerclic() {
    var lista = document.querySelectorAll("#principal p");
    for (var f = 0; f < lista.length; f++) {
        lista[f].onclick = mostraralerta;
    }
}

function mostraralerta(){
    alert('hizo clic!');
}
function hacerclic(){
    var elemento = document.getEkemtsByTagName('p')[0];
    elemento.addEventListener('click',mostraralerta,false);
}
window.addEventListener('load',hacerclic,false);
*/