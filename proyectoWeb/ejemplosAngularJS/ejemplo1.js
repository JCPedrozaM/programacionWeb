(function() {
    var app = angular.module('store', []);
    app.controller('StoreController', function() {
        this.products = gems;
    });
    var gems = [{
            name: "Dodecahedro",
            price: 2.95,
            description: "Algunas gemas tienen propiedades ocultas que van más allá de su brillo",
            canPurchase: true,
            soldOut: false,
            "images": [
                "../imagenes/gem-01.gif",
                "../imagenes/gem-02.gif",
                "../imagenes/gem-03.gif"
            ]
        },
        {
            name: "Pentagonal Gem",
            price: 5.95,
            description: "De origen desconocido, tiene 12 lados",
            canPurchase: false,
            soldOut: false,
            "images": [
                "../imagenes/gem-04.gif",
                "../imagenes/gem-05.gif",
                "../imagenes/gem-06.gif"
            ]
        },
        {
            name: "Gemoncio",
            price: 4.20,
            description: "Un pedazo de gema to' gordo",
            canPurchase: true,
            soldOut: false,
            "images": [
                "../imagenes/gem-07.gif",
                "../imagenes/gem-08.gif",
                "../imagenes/gem-09.gif"
            ]
        },
        {
            name: "Gema Gigante",
            price: 100.01,
            description: "La más extraña conocida",
            canPurchase: true,
            soldOut: false,
            "images": [
                "../imagenes/gem-10.gif",
                "../imagenes/gem-05.gif",
                "../imagenes/gem-06.gif"
            ]
        }
    ];
})();