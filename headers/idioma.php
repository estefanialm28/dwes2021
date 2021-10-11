
<?php
 
$lenguajeServer = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
$content = "";
$title = "";
 
    if ($lenguajeServer == 'es'){
 
        $content = "Esta página está en Castellano (idioma por defecto)";
 
        $title = "Cambiar idioma ";
 
    }else if( $lenguajeServer == 'en'){
 
        $content = "This page is in English";
 
        $title = "Change the language of the page";
 
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

    <?= $content ?>

</body>

</html>