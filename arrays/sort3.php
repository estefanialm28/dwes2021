<!DOCTYPE html>
<html>
<body>

<?php

    function cmp ($a,$b){
        if(strlen($a) == strlen($b)){
            return 0;
        }
        return (strlen($a) < strlen($b)) ? -1 : 1;
    }

    $descripciones = array("Juan" => "Frances", "Maria" => "Italiana", "Adrian" => "Aleman", "Janira" => "Estadounidense");
    uasort($descripciones, "cmp" );
       
    print_r($descripciones); 
?>

</body>
</html>