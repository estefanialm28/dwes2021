<!DOCTYPE html>
<html>
<body>

<?php

$cadenas = array("esto es", "un array de cadenas", "y esta programado en PHP", "adios", "hola" );
$resultado = array_map("strlen", $cadenas);

print_r($resultado);
echo "<br></br>";

echo "La cadena más corta tiene: " . min($resultado) . "<br></br>";
echo "La cadena más larga tiene: " . max($resultado);


?>

</body>
</html>