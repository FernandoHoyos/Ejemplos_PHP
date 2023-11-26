<?php
    //array una dimension
    $arrayEscalar1 = ['a', 'b', 'c'];

    //array dos dimensiones
    $arrayEscalar2 = [['a1', 'a2', 'a3', 'a4'], ['b1', 'b2', 'b3', 'b4'], ['c1', 'c2', 'c3', 'c4']];

    echo '<pre>';
    print_r($arrayEscalar2);
    echo '</pre>';

    //acceder a una fila del array
    print_r($arrayEscalar2[1]);

    echo '<br>';

    //acceder al dato de una fila y columna determinados
    echo $arrayEscalar2[1][2];

    echo '<hr>';

    //mostrar en pantalla todos los valores del array
    foreach($arrayEscalar2 as $fila) {
        print_r($fila);
        echo '<br>';
        //mostrar los datos (columnas) de cada una de las filas
        foreach($fila as $columna) {
            echo "$columna<br>";
        }
    }


?>

