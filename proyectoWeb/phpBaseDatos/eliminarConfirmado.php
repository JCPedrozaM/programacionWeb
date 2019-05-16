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
        <title>Eliminar Confirmado</title>
    </head>
    <body>
        <h2>Eliminar Producto</h2>
        <?php
            $idprod = $_GET['id'];
            $nombreproducto = $_GET['nombreprod'];
            echo "Eliminar el producto: ".$idprod." con nombre ".$nombreproducto;
            echo "<br>";

            include "../componentesPHP/conexionEmpresa.php";

            $sentencia = 'delete from producto where idproducto = '.$idprod;
            echo $sentencia;
            echo "<br>";
            $resultado = mysqli_query($conexion,$sentencia);
            $numero = mysqli_affected_rows($conexion);
            if($resultado && $numero==1){
                echo "El producto con id: ".$idprod." y nombre: ".$nombreproducto." ha sido eliminado";
            }else{
                echo "ERROR: El producto con id: ".$idprod." y nombre: ".$nombreproducto." no ha podido ser sido eliminado";
            }
        ?>
        <br><br><br>
        <a href="eliminarModificarProducto.php">Regresar a la página Eliminar-Modificar Producto</a>
    </body>
</html>
