<?php
// Arreglo con nombres de comida
$a[] = "Hamburguesa";
$a[] = "Pizza";
$a[] = "Tacos";
$a[] = "Spaghetti";
$a[] = "Ramen";
$a[] = "Sushi";
$a[] = "Fabada";
$a[] = "Milanesa";
$a[] = "Pollo";
$a[] = "Pescado";
$a[] = "Res";
$a[] = "Manzana";
$a[] = "Kiwi";
$a[] = "Pera";
$a[] = "Cereza";
$a[] = "Alitas";
$a[] = "Boneless";
$a[] = "Dona";
$a[] = "Helado";
$a[] = "Pastel";
$a[] = "Brownies";

$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

echo $hint === "" ? "No hay sugerencias" : $hint;
?>