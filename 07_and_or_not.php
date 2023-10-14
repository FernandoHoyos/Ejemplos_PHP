<?php 
    //operadores lógicos
    $n1 = 4;
    $n2 = 7;

    /*
    evaluar si el contenido de las dos variables es par o impar:
    - si las dos son pares en pantalla aparecerá el mensaje 'los dos números son pares'
    - si una de ellas es impar en pantalla aparecerá el mensaje 'uno de los números es impar'
    - si las dos son impares en pantalla aparecerá el mensaje 'los dos números son impares'
    */

    //opción 1
    if (($n1 % 2 == 0) && ($n2 % 2 == 0)) {
        echo 'los dos números son pares';
    } elseif (($n1 % 2 != 0 && $n2 % 2 == 0) || ($n2 % 2 != 0 && $n1 % 2 == 0)) {
        echo 'uno de los números es impar';
    } else {
        echo 'los dos números son impares';
    }

    echo '<hr>';
    
    //opción 2
    if (($n1 % 2 == 0) && ($n2 % 2 == 0)) {
        echo 'los dos números son pares';
    } elseif ($n1 % 2 != 0 && $n2 % 2 == 0) {
        echo 'el primer número es impar';
    } elseif ($n2 % 2 != 0 && $n1 % 2 == 0) {
        echo 'el segundo número es impar';
    } else {
        echo 'los dos números son impares';
    }
?>