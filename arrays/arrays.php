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
    
    
    
    
    
?>

</body>
</html>