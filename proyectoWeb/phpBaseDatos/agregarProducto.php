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
        <title>Agregar Producto</title>
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
        <h2>Agregar Producto</h2>
        <p>Recibe los datos de un producto y lo agrega a la BD</p>
        <?php
            $nombreproducto = $_POST["nombreproducto"];
            $precio = $_POST["precio"];
            $imagen = $_POST["imagen"];
            $categoria = $_POST["categoria"];
            echo "Producto: ".$nombreproducto." Precio: ".$precio." Imagen: ".$imagen." Categoría: ".$categoria;
            include "../componentesPHP/conexionEmpresa.php";
            $sentencia = "insert into productos (nombreproducto,precio,imagen,idcategoria) values ('$nombreproducto',$precio,'$imagen',$categoria)";
            //echo "<br><br>";
            //echo $sentencia; 

            //Ejecutar sentencia
            $resultado = mysqli_query($conexion,$sentencia);

            //Validar
            $numero = mysqli_affected_rows($conexion);
            if($resultado && $numero ==1){
                echo "El prodcuto: ".$nombreproducto." se agregó a la BD";
            }else{
                echo "ERROR: el producto: ".$nombreproducto." NO se agregó a la BD";
            }
        ?>
    </body>
</html>
