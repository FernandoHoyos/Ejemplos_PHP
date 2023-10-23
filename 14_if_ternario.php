<?php
    $numero = 36;
    $numero2 = 19;
    $numero3 = 28;

    echo "<h3>Comprobar si el numero es par o impar</h3>";
    
    echo "<p>//if clasico</p>";
    if ($numero % 2 == 0){
        echo $resultado = 'El número es par';
    } else {
        echo $resultado = 'El resultado es impar';
    }
 

    echo "<p>//if ternario</p>";

    $numero2 % 2 == 0 ?
        $resultado = 'El número es par' : //los puntos son el else.
        $resultado = 'El resultado es impar';

        echo $resultado;
    

    echo "<p>//Asignacion utilizando if ternario</p>";
        $resultado = $numero3 % 2 == 0 ?
            'El número es par' : //los dos : puntos son el else.
            'El resultado es impar';

    echo $resultado;


?>