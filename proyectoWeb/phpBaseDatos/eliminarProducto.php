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
        <title>Eliminar Producto</title>
    </head>
    <body>
        <h2>Eliminar Producto</h2>
        <p>Favor de confirmar que desea eliminar de manera definitiva el producto</p>
        <?php
            $idproducto = $_GET['id'];
            $nombreproducto = $_GET['nombre'];
            echo "<br><br>";
            echo "Producto: ".$idproducto.", ".$nombreproducto;
            echo "<br><br>";
            echo "<a href= 'eliminarConfirmado.php?id= ".$idproducto."&nombreprod= ".$nombreproducto."'>Sí</a>";
            echo "&nbsp&nbsp&nbsp&nbsp";
            echo "<a href= 'eliminarModificarProducto.php'>No</a>";
        ?>
    </body>
</html>
