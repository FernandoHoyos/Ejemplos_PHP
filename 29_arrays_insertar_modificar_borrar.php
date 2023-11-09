<?php
echo "<p>Como añadir elementos a un array</p>";

    //array inical
    $colores = ["rojo", "azul", "verde", "gris", "morado"];

    echo "<pre>";
    print_r($colores);
    echo "</pre>";

    //echo "<hr>";

    echo "<p>//Añadir elementos al final del array (array_push):</p>";

    array_push($colores , "amarilo", "gris");

    echo "<pre>";
    print_r($colores);
    echo "</pre>";

    echo "<p>//Borra el ultimo elementos del array (array_pop):</p>";

    array_pop($colores);

    echo "<pre>";
    print_r($colores);
    echo "</pre>";

    echo "<p>//Borra cualquier elementos del array (array_splice):</p>";

    //          (array, indice, numero de elementos a borrar)
    array_splice($colores, 1, 1);

    echo "<pre>";
    print_r($colores);
    echo "</pre>";


    echo "<p>//Modificar cualquier elementos del array (array 2):</p>";

    //          (array, indice, numero de elementos a borrar)
    $colores[2] = "Rosa";
    
    echo "<pre>";
    print_r($colores);
    echo "</pre>";
?>