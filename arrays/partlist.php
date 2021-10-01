<!DOCTYPE html>
<html>
<body>

<?php

$cadenas = array("hola", " soy ", "estefania, ", "una ", "estudiante" );
$resultado = [];

for($i = 1; $i < count($cadenas); $i++){
    $resultado [] = [
        implode(" ", array_slice($cadenas, 0, $i)),
        implode(" ", array_slice($cadenas, $i))
        ];
 
}
 
 
print_r($resultado) ;

?>

</body>
</html>