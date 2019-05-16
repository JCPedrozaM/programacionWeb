<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','empresapw');
if (!$con) {
    die('No se pudo conectar: ' . mysqli_error($con));
}

mysqli_select_db($con,"empresapw");
$sql="SELECT * FROM producto WHERE idproducto =" .$q;
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Precio</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['idproducto'] . "</td>";
    echo "<td>" . $row['nombreproducto'] . "</td>";
    echo "<td>" . $row['precio'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>