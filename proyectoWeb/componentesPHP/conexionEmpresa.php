<?php 
     // Conexión a la base de datos
     $conexion = mysqli_connect("localhost", "root", "", "empresapw");
     //Validar conexión
     if(mysqli_connect_errno()){
         echo 'Error de conexión a la base se datos'. mysqli_connect_error();
     }
     //Establecer el cotejamiento o conjunto de caracteres
     mysqli_set_charset($conexion, "utf8");
?>