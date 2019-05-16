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
        <p>Recibe los datos modificados de un producto para actualizarlo</p>
        <?php
            $idproducto = $_GET["idprod"];
            $nombreproducto = $_GET["nombreproducto"];
            $precio = $_GET["precio"];
            $imagen = $_GET["imagen"];
            $idcategoria = $_GET["categoria"];

        include "../componentesPHP/conexionEmpresa.php";
        $sentencia="update producto set nombreproducto='".$nombreproducto."',precio=".$precio.",imagen='".$imagen."',idcategoria=".$idcategoria." where idproducto = ".$idproducto;
        $resultado = mysqli_query($conexion, $sentencia);
        if($resultado){
            echo "El producto con id: ".$idproducto." y nombre: ".$nombreproducto." ha sido actualizadp";
        }else{
            echo "ERROR: El producto con id: ".$idproducto." y nombre: ".$nombreproducto." no ha podido ser actualizado";
        }
        ?>
        <a href="eliminarModificarProducto.php">Regresar a la página Eliminar-Modificar Producto</a>
    </body>
</html>
