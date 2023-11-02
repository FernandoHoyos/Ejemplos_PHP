<?php 
echo '<p>Asignar un parametro por defecto en caso de que el ultimo sea opcional 
    ($c = null ó "" ó 0) el opcional siempre va al final del todo.</p>';
    nombreFuncion(1, 2, 3);
    nombreFuncion(5, 6);

    function nombreFuncion($a, $b, $c = ''){
        echo "$a, $b, $c <br>";
    }

?>