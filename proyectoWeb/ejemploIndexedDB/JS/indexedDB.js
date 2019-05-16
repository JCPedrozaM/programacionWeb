//prefixes of implementation that we want to test
window.indexedDB = window.indexedDB || window.mozIndexedDB ||
    window.webkitIndexedDB || window.msIndexedDB;

//prefixes of window.IDB objects
window.IDBTransaction = window.IDBTransaction ||
    window.webkitIDBTransaction || window.msIDBTransaction;
window.IDBKeyRange = window.IDBKeyRange || window.webkitIDBKeyRange ||
    window.msIDBKeyRange

if (!window.indexedDB) {
    window.alert("Tu navegador no soporta una versión estable de indexedDB")
}

const empleados = [{
    id: "1",
    nombre: "gopal",
    edad: 35,
    email: "gopal@tutorialspoint.com"
}, {
    id: "2",
    nombre: "prasad",
    edad: 32,
    email: "prasad@tutorialspoint.com"
}];
var db;
var request = window.indexedDB.open("newDatabase", 1);

request.onerror = function(event) {
    console.log("error: ");
};

request.onsuccess = function(event) {
    db = request.result;
    console.log("success: " + db);
};

request.onupgradeneeded = function(event) {
    var db = event.target.result;
    var objectStore = db.createObjectStore("empleado", {
        keyPath: "id"
    });

    for (var i in empleados) {
        objectStore.add(empleados[i]);
    }
}

function read() {
    var transaction = db.transaction(["empleado"]);
    var objectStore = transaction.objectStore("empleado");
    var request = objectStore.get("3");

    request.onerror = function(event) {
        alert("No se puede recuperar la información de la base de datos");
    };

    request.onsuccess = function(event) {
        // Do something with the request.result!
        if (request.result) {
            alert("Nombre: " + request.result.nombre + ", Edad: " + request.result.edad + ", Email: " + request.result.email);
        } else {
            alert("Kenny no existe en la base de datos");
        }
    };
}

function readAll() {
    var objectStore = db.transaction("empleado").objectStore("empleado");

    objectStore.openCursor().onsuccess = function(event) {
        var cursor = event.target.result;

        if (cursor) {
            alert("Nombre del id " + cursor.key + " es " + cursor.value.nombre + ", Edad: " + cursor.value.edad + ", Email: " + cursor.value.email);
            cursor.continue();
        } else {
            alert("No hay más registros");
        }
    };
}

function add() {
    var request = db.transaction(["empleado"], "readwrite")
        .objectStore("empleado")
        .add({
            id: "3",
            nombre: "Kenny",
            edad: 19,
            email: "kenny@planet.org"
        });

    request.onsuccess = function(event) {
        alert("Kenny ha sido añadido a la base de datos.");
    };

    request.onerror = function(event) {
        alert("No se puede agregar el registro, Kenny ya existe en la base de datos ");
    }
}

function remove() {
    var request = db.transaction(["empleado"], "readwrite")
        .objectStore("empleado")
        .delete("3");

    request.onsuccess = function(event) {
        alert("Kenny ha sido borrado de la base de datos.");
    };
}