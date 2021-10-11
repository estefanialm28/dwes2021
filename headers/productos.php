<?php

    $id = $_GET['id' ?? ""];
    $productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];

    if(array_key_exists($id, $productos)) {
        echo "Si existe el producto $id";
    }else{
        http_response_code(404);
        echo "El producto $id no existe";
    }
 

  
 
?>



<!doctype html>

<html lang="es">

<head>

    <meta charset="utf-8">

    <title><?= $title ?></title>

    <meta name="author" content="Estefanía Leal">

</head>    

<body>

</body>

</html>