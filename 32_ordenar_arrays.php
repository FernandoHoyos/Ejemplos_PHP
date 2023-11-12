<?php

//Es un array escalable asi que no importa el orden de los datos.

    $nombres = ["Connie Corlone","Alfredo Pentanngelli", 
    "Luca Brasi", "Michael Corleone", "Virgil Solozzo",
    "Apollonia Corleone"];

    echo "<p>Array inicial:</p>";
    echo "<pre>";
    print_r($nombres);
    echo "</pre>";

    echo "<p>Ordenar el array de forma ascendente (sort) (Alfabeticamente A - Z):</p>";
    sort($nombres);

    echo "<pre>";
    print_r($nombres);
    echo "</pre>";


    echo "<p>Ordenar el array de forma descendente (rsort) (Alfabeticamente Z - A):</p>";
    rsort($nombres);

    echo "<pre>";
    print_r($nombres);
    echo "</pre>";


    echo "<p>Ordenar el array de forma aleatoria (shuffle):</p>";
    shuffle($nombres);

    echo "<pre>";
    print_r($nombres);
    echo "</pre>";


    echo "<p>Odenar un array de forma aleatoria sin utilizar shuffle, RETO:</p>";
    //creo que no es esto comprobarlo depues

    $ar1 = [2, 3];
    $ar2 = [6, 4];
    $ar3 = [8, 7];
    rand(1,10);

    print_r($ar1);

?>