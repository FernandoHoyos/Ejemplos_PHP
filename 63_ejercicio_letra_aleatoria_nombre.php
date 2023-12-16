<?php
//Variabel con un nombre
$nombre = "Beatrix Kiddo";

//mostrar en pantalla una caracter aleatorio

    //1. obtener la longitud de la cadena de texto
    $longitud = strlen($nombre);

    //2. obtener un número aleatorio entre 0 y la longitud
        $numero = rand(0, $longitud -1);//El -1 es porque se sale de la cantidad de caracteres que tiene el texto
        echo $numero;
        echo '<br>';

    //3. extraer del nombre la letra que ocupe la posición que indica en número aleatorio
    //                  texto, posicion, nº de caracteres
    $letra = substr($nombre, $numero, 1);
    echo $letra;
    echo '<hr>';

    //extraer la letra aleatoria en una sola linea de ocdigo (funciones anidades que se ejecutan de adentro hacia fuera)
    echo substr($nombre, rand(0, strlen($nombre) -1), 1);





?>