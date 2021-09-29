<!DOCTYPE html>
<html>
<body>

<?php
   $edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");

   // Ordenado por Edad, ascendente
   function edad_ascen($edades){
    asort($edades);

    var_export($edades); 
   }

   echo edad_ascen($edades). "<br></br>";
   
   // Ordenado por Edad, descendente
   function edad_descen($edades){
    arsort($edades);

    var_export($edades); 
   }

   echo edad_descen($edades). "<br></br>";

   // Ordenado por Nombre, ascendente
   function nom_ascen($edades){
    ksort($edades);

    var_export($edades); 
   }

   echo nom_ascen($edades). "<br></br>";

   // Ordenado por Nombre, descendente
   function nom_descen($edades){
    krsort($edades);

    var_export($edades); 
   }

   echo nom_descen($edades). "<br></br>";

   
?>

</body>
</html>