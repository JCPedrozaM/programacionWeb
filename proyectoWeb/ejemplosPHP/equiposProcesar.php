<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Equipo Procesar</title>
    </head>
    <body>
    <h2>Procesar Equipos</h2>
    <hr>
    <?php
    //Procesar equipos con PHP
    $equipoNombre = $_GET['equipos'];
    echo "Hola tu equipo preferido es: ".$equipoNombre;
    echo "<br>";
    if($equipoNombre == 'america'){
        echo "logotipo: <br>";
        echo "<img src='../imagenes/america.png' widht=100px height = 100px>";
        echo "<br><br>";
        echo "<p>Tiene 13 copas y su director técnico es Miguel Herrera</p>";
    }
    if($equipoNombre == 'cruzazul'){
        echo "logotipo: <br>";
        echo "<img src='../imagenes/cruzazul.png' widht=100px height = 100px>";
        echo "<br><br>";
        echo "<p>Les gusta perder finales</p>";
    }
    if($equipoNombre == 'chivas'){
        echo "logotipo: <br>";
        echo "<img src='../imagenes/chivas.png' widht=100px height = 100px>";
        echo "<br><br>";
        echo "<p>Son de GDL y tienen un estadio nice</p>";
    }
    ?>        
    </body>
</html>
