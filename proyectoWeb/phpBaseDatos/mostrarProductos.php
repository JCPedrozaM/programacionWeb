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
        <title>Mostrar productos</title>
        <style>
            table tr, td, th{
                border: 1px solid blue;
            }
            td{
                padding 5px;
            }
            img{
                width: 100px;
                height: 100px;
            }
        </style>
    </head>
    <body>
        <h2>Mostrar productos.</h2>
        <p>
            Se muestran todos los productos de la tienda,ordenados por categría y el nombre del producto.
        </p>
        <hr>
        <?php
        // Conexión a la base de datos
        $conexion = mysqli_connect("localhost", "root", "", "empresapw");
        //Validar conexión
        if(mysqli_connect_errno()){
            echo 'Error de conexión a la base se datos'. mysqli_connect_error();
        }
        //Establecer el cotejamiento o conjunto de caracteres
        mysqli_set_charset($conexion, "utf8");
        
        //Sentencia de BD
        $sentencia="select idproducto, nombreproducto, precio, imagen, idcategoria from producto order by idcategoria, nombreproducto";
        $resultado = mysqli_query($conexion, $sentencia);
        if(!$resultado){
            echo "Sentencia no se pudo ejecutar";
        }
        echo "<table><tr><th>ID</th><th>Nombre</th><th>Precio</th><th>Imagen</th><th>Categoría</th></tr>";
        while ($fila = mysqli_fetch_array($resultado)){
            echo "<tr><td>".$fila["idproducto"]."</td>";
            echo "<td>".$fila["nombreproducto"]."</td>";
            echo "<td>".$fila["precio"]."</td>";
            echo "<td><img src ='../imagenes/".$fila["imagen"]."'></td>";
            echo "<td>".$fila["idcategoria"]."</td></tr>";
        }
        echo "</table>";
        ?>
    </body>
</html>
