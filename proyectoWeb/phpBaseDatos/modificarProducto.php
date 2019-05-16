<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modificar Producto</title>
    </head>
    <body>
        <h2>Modificar Producto</h2>
        <p>Escriba los datos para el producto</p>
        <?php
            $idproducto = $_GET["id"];
            $nombreproducto = $_GET["nombre"];
            $precio = $_GET["precio"];
            $imagen = $_GET["imagen"];
            $idcategoria = $_GET["idcategoria"];
        ?>
        <form method="get" action="modificarProducto2.php">
            ID:
            <input type="text" name="idprod" id=idprod value="<?php echo $idproducto?>" readonly>
            <br><br>
            Nombre del Producto: *
            <input type="text" name="nombreproducto" id="nombreproducto" required value="<?php echo $nombreproducto?>">
            <br><br>
            Precio: *
            <input type="text" name="precio" id="precio" required value="<?php echo $precio?>">
            <br><br>
            Nombre archivo imagen: *
            <input type="text" name="imagen" id="imagen" required value="<?php echo $imagen?>">
            <br><br>
            Categoría (1 = Abarrotes, 2 = Ferretería, 3 = Electrónicos, 4 = Muebles): *
            <input type="number" name="categoria" id="categoria" required min="1" max="4" value="<?php echo $idcategoria?>">
            <br><br>
            <input type="submit" value="Modificar">
        </form>
    </body>
</html>
