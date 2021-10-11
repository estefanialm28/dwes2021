<?php

header('Content-Type: application/zip');

header('Content-Lenght: 1000000');

header('Content-Disposition: attachment; filename="download.zip"');

for($i = 0; $i < 1000; $i++){
    echo str_repeat(".", 1000);
    usleep(50000);
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