
<?php
 
 $navegador = $_SERVER['HTTP_USER_AGENT'];
 
 $content = "";
 $title = "";
  
 if (strpos($navegador , 'Firefox') === FALSE){
  
    $title = "Change the navigator";
  
    $content = "No es compatible con este navegador";
  
  
 }else{
   
   
    $content = "Página web";
   
    $title = "Bienvenidos/as";
  
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

    <ul><?= $title ?>

        <li><a href='idioma.php?setLanguage=es'>Español</a></li>

        <li><a href='idioma.php?setLanguage=en'>Inglés</a></li>

    </ul>

    <?= $content ?>

</body>

</html>