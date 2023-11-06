<?php 
    //Tradiciponal
    //          0  1   2   3    4   5
    $numeros = [5, 23, 11, 90, 12, 10]; 

    //acceder a un valor determinado del array.
    echo $numeros[2];
    echo "<br>";

    $dias = array("Lunes", "Martes", "Miercoles", "Jueves");
    echo $dias[3];
    echo "<br>";

    //Arrays de valores mixtos
    $mixto = [2, "a", 4, "h", true, 6, null];
    echo $mixto[5];
    echo "<br>";

    //array a partir de variables
    $a1 = "a";
    $n1 = 4;
    $variables = [$a1, $n1]; //["a", 4]
    echo $variables[1];
    echo "<br>";

//formas de recorrer arrays
    $colores = ["rojo", "azul", "verde", "gris", "morado"];
    echo count($colores); //numero de elementos del array
    echo "<br>";

    /*ejercicio: 
    mostrar en pantalla el contenido del array $colores utilicando un bucle for:*/

    for ($i=0; $i < count($colores); $i++) { //utilizamos count que es quien nos cuenta cuantos elementos hay dentro del array.
        echo $colores[$i];
        echo "<br>";
    }
    echo "<hr>";

    //instrucción específica para recorrer un array (solo valores), foreach solo se utiliza con arrays.
        foreach ($colores as $color) { //la palabra reservada as hace de separacion($color = $colores[0]), como en SQL.
            echo $color;
            echo "<br>";
        }
    echo '<hr>';
    
    //Instrución específica para recorrer un array mostrando las claves "indices" y los valores:
    foreach ($colores as $clave => $color) {//el simbolo => es le que hace el recorrido de las claves.
        echo "$clave $color <br>";
    }

    echo "<hr>";

    //visualizar el contenido de un array:
    echo "<p>Visualizar el contenido de un array elegantemente:</p>";
    echo "<pre>";
    print_r($colores);
    echo "</pre>";

    echo "<hr>";



?> 