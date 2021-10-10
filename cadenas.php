<?php

$nombre = "";
$prefijo = "";
$url = 'http://username:password@hostname:9090/path?arg=value';

function asignarNombre(&$name){

  if($_GET["nombre"] == NULL){
    $nombre = "usuario";
  }else{
    $nombre = trim(($_GET["nombre"]), "/");
  }

  return $nombre;

}
echo "Tu nombre es " . htmlspecialchars(asignarNombre($nombre)) ;



function longitud($nombre){

  return strlen($nombre);

}

echo "<br><br>La longitud de la cadena " . $nombre . " es " . longitud($nombre);




function mayusculas($nombre){

  return strtoupper($nombre);

}

echo "<br><br>Tu nombre en mayúsculas es " . mayusculas($nombre);

function minusculas($nombre){

  return strtolower($nombre);

}

echo "<br><br>Tu nombre en minúsculas es " . minusculas($nombre);

function prefijo($nombre, &$prefijo){
  
  if(($_GET["prefijo"]) == NULL){
    $prefijo = "";
    return "<br><br>El prefijo no está definido";
  }else{
    $prefijo = ($_GET["prefijo"]);
  }

  $position = strpos($nombre, $prefijo);

  if ($position !== false){
    return "<br><br>La cadena si que contiene el prefijo";
  }else {
    return "<br><br>La cadena no contiene el prefijo";
  }

}
echo prefijo($nombre, $prefijo);



function cuantasVeces($nombre){

  $nombre = strtolower($nombre);

  return substr_count($nombre, "a");

}

echo "<br><br> Hay " .cuantasVeces($nombre) . " 'a' en la cadena";


function posicion($nombre){

  if (stripos($nombre, "a") === NULL){
    return "No existe la 'a' en esta cadena";
  }else{
    return "La primera letra 'a' se encuentra en la posición " . stripos($nombre, "a");
  }

}

echo "<br><br>" . posicion($nombre);


function cambia($nombre){

  $nombre = strtolower($nombre);

  return str_ireplace("o", "0", $nombre);
}

echo "<br><br> Esta es la cadena reemplazada : " . cambia($nombre);


echo "<br><br>" . $url;

function analizarUrl($url){

  echo "<br>Protocolo usado : " . parse_url($url, PHP_URL_SCHEME);
  echo "<br>Nombre de usuario : " . parse_url($url, PHP_URL_USER);
  echo "<br>Path de la URL : " . parse_url($url, PHP_URL_PATH);
  echo "<br>Querystring de la URL : " . parse_url($url, PHP_URL_QUERY);

}

echo analizarUrl($url);

?>
