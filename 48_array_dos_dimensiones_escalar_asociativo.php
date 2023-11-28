<?php 
    $personas = [
        //En este caso las claves 100A y 200B las quitamos porque no es una clave asociativa.
        [
            'nombre' => 'Arch Stanton',
            'direccion' => 'Av Cementerio, 56',
            'poblacion' => 'Sad Hill' 
        ],
        [
            'nombre' => 'Connie Corleone',
            'direccion' => 'Av Solozzo, 12',
            'poblacion' => 'New York City'
        ]
    ];

    echo '<pre>';
    print_r($personas);
    echo '</pre>';

    echo '<hr>';
    //die(); //La función die() es un alias de la función exit().

    //acceder a una fila del array
    print_r($personas[1]);

    echo '<br>';

    //acceder al dato de una columna del array
    echo $personas[1]['nombre'];

    echo '<hr>';

    //mostrar en pantalla todos los valores del array
    //      array         dato
    foreach($personas as $datosPersona) {
        echo "<br>";
        print_r($datosPersona);
        echo "<br>";
        //mostrar de forma individual cada uno de los datos de la persona (cada fila del array principal)
        foreach($datosPersona as $clave => $dato) {
            echo "$clave: $dato<br>";
        }
    }
    echo '<hr>';

    //modificar la dirección de la segunda persona
    $personas[1]['direccion'] = 'Av Clemenza, 78';

    echo '<pre>';
    print_r($personas);
    echo '</pre>';

    echo '<hr>';
    //borrar la primera persona
    //unset($personas[0]); //unset es para borrar datos en los array asociativos, aqui utilizamos uno para escalar array_splice
    
    //           array, indice a borrar, nº elemento a borrar
    array_splice($personas, 0, 1);// al borrar un dato se reorganozan los indices para que siempre sean continuos.

    echo '<pre>';
    print_r($personas);
    
    //die();