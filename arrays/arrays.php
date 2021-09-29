<!DOCTYPE html>
<html>
<body>

<?php
	$nombres = array("3" => "Janira", "1" => "Alejandro", "2" => "Estefania");
  $nombres2 = array(
            array("id" => "1", "nombre" => "Janira", "edad" => "19"),
            array("id" => "2", "nombre" => "Alejandro", "edad" => "25"),
            array("id" => "3", "nombre" => "Estefania", "edad" => "18"),
    );
  $numeros = array(1,2,3,4,5,6,7,8,9,10);
    
    // contar la cantidad de nombres
    function cuentaNombres( $nombres){
      return count($nombres);
    }
    
    echo cuentaNombres($nombres);
    
    echo "<br>";
    
    //Separa los nombres por espacios
  	
    function separa( $nombres ){
        $separado_por_comas = implode(" ", 	$nombres);
	    return $separado_por_comas;
    
    }
    
    echo separa($nombres);
    
    echo "<br>";
    
    //Ordena alfabeticamente
    
    function ordenaAlfa( $nombres ){
          asort($nombres);
        
          foreach ( $nombres as $id => $nombre){
          	echo $nombre . ", ";
          
      }
    }
    
    echo ordenaAlfa( $nombres);
    
    echo "<br>";

	//Muestra la array al reves

	function alReves( $nombres ){
     $reversed = array_reverse($nombres);
     $preserved = array_reverse($nombres, true);
    
    print_r ($reversed);
    
    }
    
    echo alReves( $nombres);
	echo "<br>";
    //Busca un nombre en la array
    
   	function busca ( $nombres ){
    $clave = array_search('Janira', $nombres);
    echo $clave;
    }
    
    echo busca($nombres);
    
    //Tabla con los datos del array

    function array_tabla($matriz){
      $html = "<table>";
      
      foreach($matriz[0] as $clave => $fila){
        $html .= "<th>" .$clave. "</th>";
      }

      foreach($matriz as $fila){
        $html .= "<tr>";
          foreach($fila as $elem){
            $html .= "<td>" .$elem. "</td>";
          }
          $html .= "</tr>";
      }
      $html .= "</table>";

      return $html;
      }
    
    echo array_tabla($nombres2) . "<br></br>";

    function extraer_columna($nombres2){
      $alumnos = array_column($nombres2, 'nombre');
      print_r($alumnos);
    }

    echo extraer_columna($nombres2) . "<br></br>";

    function sumarArray($numeros){
      $suma = array_sum($numeros) . "\n";
      return $suma;
    }

    echo sumarArray($numeros); 

    
?>

</body>
</html>