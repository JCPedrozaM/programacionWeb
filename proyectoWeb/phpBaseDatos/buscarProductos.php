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
        <title>Buscar productos</title>
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
        <h2>Buscar Productos</h2>
        <p>Escribir el nombre o parte del nombre del producto a buscar</p>
        <hr>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Nombre: &nbsp;&nbsp;&nbsp;
            <input type="text" name="nombreproducto" id="nombreproducto">
            <br><br>
            <input type="submit" value="Buscar">
        </form>
        <?php
            if(isset($_POST['nombreproducto']) and $_POST['nombreproducto'] != ''){
                echo 'codigo PHP';
                include "../componentesPHP/conexionEmpresa.php";
                 //Sentencia de BD
                $nombreProd = $_POST["nombreproducto"];
                $sentencia="select idproducto, nombreproducto, precio, imagen, idcategoria from producto where nombreproducto like '%".$nombreProd ."%' order by idcategoria, nombreproducto";
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
            }
        ?>
    </body>
</html>
