<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Mi color favorito es: " . $_SESSION["favcolor"] . ".<br>";
echo "Mi animal favorito es: " . $_SESSION["favanimal"] . ".";
?>

</body>
</html>