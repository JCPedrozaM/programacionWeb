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
        <title>Tarea 6</title>
        <link rel="stylesheet" href="estilos/estilo.css">
    <script src="JS/script.js"></script>
    </head>
    <body>
        <header>
        <h1>PHP Introducción</h1>
        <p>Tarea 6</p>
    </header>
    <section>
        <article>
            <h2>¿Qué es PHP?</h2>
            <p>PHP, acrónimo recursivo en inglés de PHP: Hypertext Preprocessor (preprocesador de hipertexto), es un lenguaje de programación de propósito general de código del lado del servidor originalmente diseñado para el desarrollo web de contenido dinámico. </p>
        </article>
        <article>
            <h2>¿Qué nos permite hacer PHP?</h2>
            <p>PHP nos permite insertar código para agregar funcionalidades de parte del servidor</p>
            <br>
            <h2>1. Echo y Print</h2>
            <p>Echo y Print nos permiten introducir texto en la página, incluso etiquetas html. Ejemplo: </p>
            <?php
            // put your code here
            $txt = "Hola desde PHP usando Echo";
            echo $txt;
            print "<br> Hola desde PHP usando Print"
            ?>
            <h2>2. Tipos de Datos</h2>
            <p>Al igual que en otros lenguajes PHP no necesita declarar el tipo de dato para cada variable, se le asigna el valor deseado y automaticamente se asigna el tipo. El tipo se puede recuperar a través de la función var_dump(). Ejemplo:</p>
            <?php
            $txt = "Carlos";
            $int = 4;
            $doub = 4.1824;
            $ban = false;
            var_dump($txt);
            echo "<br>";
            var_dump($int);
            echo "<br>";
            var_dump($doub);
            echo "<br>";
            var_dump($ban);
            ?>
            <h2>3. Strings</h2>
            <p>Los Strings cuentan con funciones predeterminadas que nos ayudan a contar caracteres, palabras, remplazar una palabra, etc. Ejemplo:</p>
            <p>Texto: "Hola a todos"</p>
            <?php
            $txt = "Hola a todos";
            echo "Caracteres: ". strlen($txt). "<br>";
            echo "Palabras: ". str_word_count($txt). "<br>";
            echo "Reemplazar todos por ustedes: ". str_replace("todos","ustedes",$txt). "<br>";
            echo "Revés: ". strrev($txt);
            ?>
            <h2>4. Constantes</h2>
            <p>A diferencia de las variables, las constantes se declaran a través de la función define(). Se utiliza el primer parametro para el nombre y el segundo para el valor. Ejemplo: </p>
            <p>define("saludo","Hola a todos!")</p>
            <?php
            define("saludo","Hola a todos!");
            echo "El valor de saludo es: ".saludo;
            ?>
            <h2>5. Operadores</h2>
            <p>PHP cuenta con diversos operadores que nos ayudarán a realizar operaciones tanto aritmeticas como lógicas. Ejemplo:</p>
            <p>X=5, Y=4</p>
            <?php
            $x = 5;
            $y = 4;
            echo "x + y = ".($x + $y);
            echo "<br>";
            echo "x**y = ".($x ** $y);
            echo "<br>";
            echo "x>y = ".($x>$y);
            ?>
            <h2>6. If...Else</h2>
            <p>Nos permiten realizar acciones dependiendo si se cumple o no cierta condición. Ejemplo:</p>
            <p>Si la hora es mayor a 12 mostrara el mensaje "buenas tardes", en caso contrario "buneos días"</p>
            <?php
            $hora = date("H");
            if($hora > 12){
                echo "buenas tardes";
            }else{
                echo "buenos días";
            }
            ?>
            <h2>7. Switch</h2>
            <p>Determina una operación dependiendo el valor que tenga cierta variable. Ejemplo: </p>
            <p>Se asigna una variable color que devolverá cierto mensaje dependiendo del valor</p>
            <?php
            $favcolor = "rojo";
            switch ($favcolor) {
                case "rojo":
                    echo "Tu color favorito es el rojo!";
                    break;
                case "azul":
                    echo "Tu color favorito es el azul!";
                    break;
                case "verde":
                    echo "Tu color favorito es el verde!";
                    break;
                default:
                    echo "Tu color favorito no es el rojo, verde o azul!";
            }
            ?>
            <h2>8. Ciclo While</h2>
            <p>Realiza una serie de acciones mientras se cumpla cierta condición. Ejemplo:</p>
            <p>Imprimir números mientras sean menores a 24</p>
            <?php 
            $x = 1; 
            while($x < 24) {
                echo "El número es: $x <br>";
                $x++;
            } 
            ?>
            <h2>9. Ciclo For</h2>
            <p>Permite realizar instrucciones de manera ciclica con una cantidad de repeticiones definidas. Ejemplo:</p>
            <p>Imprimir números del 0 al 10</p>
            <?php 
            for ($x = 0; $x <= 10; $x++) {
                echo "El número es: $x <br>";
            } 
            ?>
            <h2>10. Funciones</h2>
            <p>PHP nos permite crear nuestras propias funciones y ejecutarlas a través de una llamada a la función. Ejemplo:</p>
            <p>Realizar una función que imprima y llamarla a ejecutar</p>
            <?php
            function writeMsg() {
                echo "Hola!! Soy una función";
            }

            writeMsg(); // call the function
            ?>
            <h2>11. Arreglos</h2>
            <p>Al igual que en otros lenguajes podemos declarar arreglos para almacenar información de manera agrupada. Ejemplo:</p>
            <p>Arreglo con nombres de fabricantes de autos: $cars = array("Volvo", "BMW", "Toyota");</p>
            <?php
            $cars = array("Volvo", "BMW", "Toyota");
            echo "El arreglo está conformado por: " . $cars[0] . ", " . $cars[1] . " y " . $cars[2] . ".";
            ?>
            <h2>12. Ordenar Arreglos</h2>
            <p>Existen funciones que podemos usar con un arreglo para de esta manera ordenarlo. Ejemplo:</p>
            <p>Se declarará un arreglo con números desordenados y se ordenará: $numbers = array(4, 6, 2, 22, 11)</p>
            <?php
            $numbers = array(4, 6, 2, 22, 11);
            sort($numbers);
            $arrlength = count($numbers);
            for($x = 0; $x < $arrlength; $x++) {
                echo $numbers[$x];
                echo "<br>";
            }
            ?>
            <h2>13. Superglobals</h2>
            <p>Son un tipo de variables que podemos declarar para ser usadas en cualquier script del documento PHP. Existen alguna que nos regresan información del servidor. Ejemplo:</p>
            <?php 
            echo $_SERVER['PHP_SELF'];
            echo "<br>";
            echo $_SERVER['SERVER_NAME'];
            echo "<br>";
            echo $_SERVER['HTTP_HOST'];
            echo "<br>";
            echo $_SERVER['HTTP_REFERER'];
            echo "<br>";
            echo $_SERVER['HTTP_USER_AGENT'];
            echo "<br>";
            echo $_SERVER['SCRIPT_NAME'];
            ?>
        </article>
    </section>
    <footer>
        <p>Insituto Tecnológico de Chihuahua II</p>
        <p>Ingeniería en Sistemas Computacionales</p>
        <a href="acercaDe.html">Acerca de...</a>
    </footer>
    </body>
</html>
