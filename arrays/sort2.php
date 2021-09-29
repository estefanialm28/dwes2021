<!DOCTYPE html>
<html>
<body>

<?php
      $temperatura = array(23, 25,27, 23, 27,26, 26, 28,27, 22, 26, 21,
                       23,24,21,48,18,19,26,28,27,27,26,18,23,26,24,27,29,30);

  //ordenamos el array temperatura
  sort($temperatura);

  //contamos cuantos valores tiene el array $temperatura
  $cantidad = count($temperatura);

  //iniciamos en 0 la media, aun que esto no es necesario en php
  $media = 0;
  
  //recorremos el array para imprimir las temperaturas y sumarlas para realizar la media
  $x=1;
  for($i = 0; $i < $cantidad; $i++){
    //sumamos cada una de las temperaturas dentro de la variable $media
    $media += $temperatura[$i];
    echo ($i+1)." día = ".$temperatura[$i]."&deg;&nbsp;&nbsp;&nbsp;&nbsp; ";
   //cada vez que x alcance el valor de 5 realizamos un salto de línea y así solo imprimir 5 valores de $temperatura en cada línea
    if(5==$x)
    {
        echo"<br>";
        $x = 0;
    }
   
    $x++;
 }
 
  //dividimos el total de la media por el número de temperaturas que hay en el array
  $media = $media/$cantidad;
  echo "<br>Las cinco temperaturas mínimas = $temperatura[0]&deg;, $temperatura[1]&deg, $temperatura[2]&deg, $temperatura[3]&deg, $temperatura[4]&deg<br />";
   //a la temperatura media le damos formato para que solo muestre dos decimales
  echo "Temperatura media  = ".number_format($media,2)."&deg;<br />";  
 
  //ordenamos al revés el array $temperatura
  rsort($temperatura);
?>

</body>
</html>