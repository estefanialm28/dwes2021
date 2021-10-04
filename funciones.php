<?php

    $tabla = "alumnos";
    $valores = array("nombre" => "Juan", "apellidos" => "Martinez");
    $texto = "insert into tabla (valores) values (valores)";

    $updatedValores = array("id" => 1, "nombre" => "Juan", "apellidos" => "Martínez");


    function insert ($tabla, $valores){

        $texto = "insert into $tabla (";

        foreach ($valores as $campo => $valor){
            $texto .= "$campo ,";
        }

        $texto = substr($texto, 0, -1) . ") values (:";

        foreach ($valores as $campo => $valor){
            $texto .= "$campo ,:";
        }

        $texto = substr($texto, 0, -2) . ")";

        return $texto;
    }

    echo insert($tabla, $valores);





    function insertReference($tabla, $valores, &$texto){

        $texto = str_replace("tabla", "$tabla", $texto);
        $strvalores="";
        $strValores=":";

        foreach ($valores as $campo => $valor){
            $strvalores .= "$campo, ";
        }

        $strvalores = substr($strvalores, 0, -2) ;
        $texto = str_replace("valores", "$strvalores", $texto);

        
        foreach ($valores as $campo => $valor){
            $strValores .= "$campo, :";
            
        }
        $strValores = substr($strValores, 0, -3);
        $texto = str_replace("valores", "$strValores", $texto);


        return $texto;
    }

    echo insertReference($tabla, $valores, $texto);




    function update ($tabla, $updatedvalores){

        $texto = sprintf('UPDATE %s SET %s WHERE id = :id ',
                $tabla,
                // getUpdates($updatedvalores),
                array_key_first($updatedvalores),
                array_key_first($updatedvalores)
            );

        return $texto;
       
    }

    echo update($tabla, $updatedvalores);




    
    function realizaOperacion(callable $operacion, string $simbolo, int $operando1, int $operando2){
        echo "$operando1 $simbolo $operando2 =  {$operacion($operando1, $operando2)}";
      }
      $suma = function (int $operando1, int $operando2) {
        return $operando1 + $operando2;
      };
      $resta = function (int $operando1, int $operando2) {
        return $operando1 - $operando2;
      };
      
      $multiplicacion = function (int $operando1, int $operando2) {
        return $operando1 * $operando2;
      };
      $division = function (int $operando1, int $operando2) {
        return $operando1 / $operando2;
      };

      echo realizaOperacion($suma, "+", 8, 2);
      echo realizaOperacion($resta, "-", 8, 2);
      echo realizaOperacion($multiplicacion, "*", 8, 2);
      echo realizaOperacion($division, "/", 8, 2);

?>