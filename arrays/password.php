<!DOCTYPE html>
<html>
<body>

<?php

    function rand_Pass($upper = 1, $slower = 5, $numeric = 3, $other = 2){
        
        $pwd = "";
        $mayus = chr(rand(65,90));
        $minusculas = "";
        $numeros = "";
        $simbolos = "";

        $pwd .= $mayus;

        for($i = 0; $i < 5; $i++){
            $minusculas .= chr(rand(97,122));
        }

        $pwd .= $minusculas;

        for ($i=0; $i < 3 ; $i++) { 
            $numeros .= rand(0,9);
        } 

        $pwd .= $numeros;

        for($i = 0; $i < 2; $i++){
            $simbolos .= chr(rand(35,47));
        }

        $pwd .= $simbolos;

        return str_shuffle($pwd);
    }
 
    echo rand_Pass();
   
?>

</body>
</html>