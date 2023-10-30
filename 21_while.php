<?php 

 echo "<h3>Números alateorios entre 1 y 1000, hasta encontar uno divisible entre 7</h3>";

    //bucle while

    $continuar = true;

    while ($continuar == true) {
        //generar un numero aleatorio entre 1 y 1000
        $num = rand(1, 1000);

        echo "$num <br>";

        //condición de salida
        if ($num % 7 == 0) {
            $continuar = false;
        }
    }

?>