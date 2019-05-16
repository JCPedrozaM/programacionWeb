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
        <title>Formulario Producto</title>
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
        <h2>Formulario Producto</h2>
        <p>Ingresa los datos del producto</p>
        <form method="get" action="agregarProducto.php">
            Nombre del Producto: *
            <input type="text" name="nombreproducto" id="nombreproducto" required>
            <br><br>
            Precio: *
            <input type="text" name="precio" id="precio" required>
            <br><br>
            Nombre archivo imagen: *
            <input type="text" name="imagen" id="imagen" required>
            <br><br>
            Categoría (1 = Abarrotes, 2 = Ferretería, 3 = Electrónicos, 4 = Muebles): *
            <input type="number" name="categoria" id="categoria" required min="1" max="4">
            <br><br>
            <input type="submit" value="Agregar">
        </form>
    </body>
</html>
