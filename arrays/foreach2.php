<!DOCTYPE html>
<html>
<body>

<?php
    $colores = array('blanco'=>'blanco.html', 'verde' => 'verde.html', 'rojo' => 'rojo.html');
    $html = "<ul>";

    foreach($colores as $nombre => $color){
        $html .= "<li>" . "<a href='$color'>" . $nombre. "</li>";
    }

    $html .= "</ul>";

    echo $html;
?>

</body>
</html>