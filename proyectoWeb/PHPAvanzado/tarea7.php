<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tarea 6</title>
        <link rel="stylesheet" href="estilos/estilo.css">
        <script src="JS/script.js"></script>
        <style>
            .error {color: #FF0000;}
        </style>
    </head>
    <body>
        <header>
        <h1>PHP Avanzado</h1>
        <p>Tarea 7</p>
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
        </article>
        <article>
            <h2>1. Formularios</h2>
            <p>PHP nos permite crear formularios para poder manejar información dada por el usuario. Permite configurar de tal manera los campos para validar que las entradas sean del tipo deseado. Ejemplo:</p>
            <?php
            // define variables and set to empty values
            $nameErr = $emailErr = $genderErr = $websiteErr = "";
            $name = $email = $gender = $comment = $website = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "Nombre obligatrio";
            } else {
                $name = test_input($_POST["name"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                $nameErr = "Solo letras permitidas"; 
                }
            }
            
            if (empty($_POST["email"])) {
                $emailErr = "Email obligatorio";
            } else {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Formato Invalido"; 
                }
            }
                
            if (empty($_POST["website"])) {
                $website = "";
            } else {
                $website = test_input($_POST["website"]);
                // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                $websiteErr = "URL Invalido"; 
                }
            }

            if (empty($_POST["comment"])) {
                $comment = "";
            } else {
                $comment = test_input($_POST["comment"]);
            }

            if (empty($_POST["gender"])) {
                $genderErr = "Gendero obligatorio";
            } else {
                $gender = test_input($_POST["gender"]);
            }
            }

            function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
            }
            ?>

            <h2>PHP Formulario Ejemplo</h2>
            <p><span class="error">* required field</span></p>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            Nombre: <input type="text" name="name" value="<?php echo $name;?>">
            <span class="error">* <?php echo $nameErr;?></span>
            <br><br>
            E-mail: <input type="text" name="email" value="<?php echo $email;?>">
            <span class="error">* <?php echo $emailErr;?></span>
            <br><br>
            Website: <input type="text" name="website" value="<?php echo $website;?>">
            <span class="error"><?php echo $websiteErr;?></span>
            <br><br>
            Comentario: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
            <br><br>
            Genero:
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="femenino") echo "checked";?> value="femenino">Femenino
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="masculino") echo "checked";?> value="masculino">Masculino
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="otro") echo "checked";?> value="otro">Otro  
            <span class="error">* <?php echo $genderErr;?></span>
            <br><br>
            <input type="submit" name="submit" value="Submit">  
            </form>

            <?php
            echo "<h2>Tú entrada:</h2>";
            echo "Nombre: ".$name;
            echo "<br>";
            echo "Email: ".$email;
            echo "<br>";
            echo "Website: ".$website;
            echo "<br>";
            echo "Comentario: ".$comment;
            echo "<br>";
            echo "Genero: ".$gender;
            ?>
        </article>
        <article>
            <h1>PHP Avanzado</h1>
            <h2>1.Arreglos Multinivel</h2>
            <p>PHP nos permite generar arreglos multnivel (matrices) para almacenar información relacionada entre si o para algún otro fin. Ejemplo:</p>
            <p>Se guarda en una sola fila el nombre de un carro, cantidad en stock y vendidos y se imprime la matriz. La matriz es de (4,3)</p>
            <?php
            $cars = array
            (
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15)
            );
            
            echo $cars[0][0].": En stock: ".$cars[0][1].", Vendido: ".$cars[0][2].".<br>";
            echo $cars[1][0].": En stock: ".$cars[1][1].", Vendido: ".$cars[1][2].".<br>";
            echo $cars[2][0].": En stock: ".$cars[2][1].", Vendido: ".$cars[2][2].".<br>";
            echo $cars[3][0].": En stock: ".$cars[3][1].", Vendido: ".$cars[3][2].".<br>";
            ?>
            <h2>2.Función Date</h2>
            <p>PHP cuenta con la función Date que nos permite obtener los valores de la fecha actual, tanto día, mes, año, hora, etc. Ejemplo:</p>
            <?php
            echo "Hoy es " . date("Y/m/d") . "<br>";
            echo "Hoy es " . date("Y.m.d") . "<br>";
            echo "Hoy es " . date("Y-m-d") . "<br>";
            echo "Hoy es " . date("l");
            ?>
            <h2>3. Incluir un PHP</h2>
            <p>A través de la palabra reservada "incude" podemos dentro de una etiqueta PHP llamar a un archivo PHP que se encuentre en nuestro sitio. Ejemplo:</p>
            <p>Se llamrá a un archivo PHP con información de un vehículo</p>
            <?php include 'phpIncluir.php';
            echo "A través de otro archivo PHP te puedo decir que tengo un:  $car $color.";
            ?>
            <h2>4. Manipulación de Archivos</h2>
            <p>PHP nos permite realizar varias funciones con archivos como crear, leer, escribir o incluso subir. Ejemplo:</p>
            <p>Se arbrirá un archivo con ayuda de la función fopen()</p>
            <?php
            $myfile = fopen("archivo.txt", "r") or die("No se puede abrir el archivo!");
            echo fread($myfile,filesize("archivo.txt"));
            fclose($myfile);
            ?>
            <h2>5.Cookies</h2>
            <p>Las cookies son pequeños rastros de información que deja el usuario, su función generalmente es como herramienta de identificación. PHP cuenta cn funciones que nos permiten crear, eliminar o incluso saber si las cookies están habilitadas. Ejemplo:</p>
            <p>Se mostrará a través de un mensaje si las cookies están habilitadas</p>
            <?php
            if(count($_COOKIE) > 0) {
                echo "Cookies están activas.";
            } else {
                echo "Cookies están desactivadas.";
            }
            ?>
            <h2>6. Sesiones</h2>
            <p>Una sesión permite almacenar información en variables que puede ser utilizada en diferentes páginas, a dferencia de las cookies estas no se almacenan en la computadora del usuario. Ejemplo:</p>
            <?php
            $_SESSION["favcolor"] = "verde";
            $_SESSION["favanimal"] = "tortuga";
            echo "Valores de sesión definidos.";
            ?>
            <br>
            <a href="sesion.php">Ver valores de Sesión</a>
            <h2>6.Filtros</h2>
            <p>Un filtro nos permite verificar la información que se está introduciendo en un PHP, esto con el objetivo de que sea acorde con lo que se requiere. Podemos usar filtros por defecto o crear el nuestro, un ejemplo de estos últimos fueron los usados en el formulario de la parte superior de la página. Los filtros estándar ya están definidos. Ejemplo:</p>
            <p>Se usará un filtro estándar para verificar si un número es de tipo entero, se mandará el número "4.1824"</p>
            <?php
            $int = 4.1824;

            if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
                echo("El número es un entero valido");
            } else {
                echo("El número no es un entero valido. Número: ").$int;
            }
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
