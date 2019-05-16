<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ciclo For</title>
        <style>
            table, tr,td{
                width: 10%;
                border: 1px solid blue;
            }
            tr:nth-child(odd){
                background-color: red;
            }
        </style>
    </head>
    <body>
        <h2>Ejemplos Ciclo For</h2>
        <?php
        // put your code here
        for($i = 1; $i <= 10 ; $i++){
            echo "iteración: ".$i;
            echo "<br>";
        }
        echo '<br><br>';
        for($i = 1; $i <= 10 ; $i++){
            if($i % 2 == 0){
                echo "iteración: ".$i;
                echo "<br>";
            }
        }
        echo '<br><br>';
        echo "<table>";
        for($i = 1; $i <= 1000 ; $i++){
            echo "<tr><td>".$i."</td></tr>";
        }
        echo "</table>";
        echo '<br><br>';
        ?>
    </body>
</html>
