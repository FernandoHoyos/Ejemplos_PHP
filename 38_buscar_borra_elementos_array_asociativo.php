<?php
// array de paises/capitales
    $paises['Francia']      = 'Paris';
    $paises['Ecuador']      = 'Quito';
    $paises['Italia']       = 'Roma';
    $paises['Alemania']     = 'Berlin';
    $paises['Argentina']    = 'Buenos Aires';
    $paises['Colombia']     = 'Bogota';

    echo '<pre>';
    print_r($paises);
    echo '</pre>';

    //Buscar un valor (capital) en el array (clave o indice)
    $indiceoclave = array_search("Bogota", $paises);

    echo "<hr>$indiceoclave<hr>";

    //Borrar una relacion pais-capital del array
    //array_splice(); este no sirve porque obliga a tener un indice numerico y en asociativo no hay un numero.
    unset($paises[$indiceoclave]); //tiene un argumento de que relaciona que elemento quiere borrar.

    //En el caso de arrays asociativos este no borra ningun indice en el array como lo hace en los escalares.
    echo '<pre>';
    print_r($paises);
    echo '</pre>';
?>