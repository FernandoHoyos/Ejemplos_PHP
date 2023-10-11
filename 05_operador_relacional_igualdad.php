<?php

use function PHPSTORM_META\type;

    $a = 6;
    $b = 5;

    //con == solo se evalua el contenido, con === se evalua contenido y tipo
    if ($a === $b) {
        echo 'Son iguales';
    } else {
        echo 'Son diferentes';
    }

    echo '<hr>';

    //verificar solo el tipo de variable
    if (gettype($a) == gettype($b)) {
        echo 'Son del mismo tipo';
    } else {
        echo 'No son del mismo tipo';
    }

    echo '<hr>';

    $condicion = false;

    //cualquier valor de una variable que sea distinto de: 0, null, '' o false se evalua como true

    if (!$condicion) {
        echo 'la expresión es cierta';
    } else {
        echo 'la expresión es falsa';
    }

?>