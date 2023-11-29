<?php
    //activar el uso de variables de sesion
    session_start();

    //Elimina cualquier variable de sesion iniciada, esta se pone despues de iniciar las variables de sesion .
    //unset($_SESSION['personas']); //Borra solo la sesion indicada
    //session_destroy(); //Borra todo, en caso de que no funcione usar unset();

   // print_r($_SESSION); //Es la supervariable que es un array, esta no se crea por si sola hay que activarla para que se cree.

    //guardar datos en la variable de sesion
    //$_SESSION['sesion'] = 'Sesion iniciada'; //se puede guardar cualquier cosa dentro de la variable session
    /*$_SESSION['persona'] = [
        'nombre' => 'virgil Solozzo',
        'direccion' => 'Av Corleone, 23',
        'poblacion' => 'New York City'
    ];*/

    //En esta podemos ver el indice del array
   /* $_SESSION['personas'] = [
        [
        'nombre' => 'virgil Solozzo',
        'direccion' => 'Av Corleone, 23',
        'poblacion' => 'New York City'
        ],
        [
            'nombre' => 'Tuco pacifico',
            'direccion' => 'Av Sergio leone',
            'poblacion' => 'NSad Hill'
            ]
    ];*/

//ESTE INICIO DE SESION ES PARA UTILIZARLO DE ALMACENAMIENTO TEMPORAL DEL EJERCICIO 51
    $_SESSION['personas'] = [
        [
            'nombre' => 'virgil Solozzo',
            'direccion' => 'Av Corleone, 23',
            'poblacion' => 'New York City'
        ],
        [
            'nombre' => 'Tuco pacifico',
            'direccion' => 'Av Sergio leone',
            'poblacion' => 'NSad Hill'
        ]
    ];
    

    echo '<pre>';
    print_r($_SESSION);
    echo '<pre>';
    
    //mostrar el nombre de una de las personas
    //este es un array de tres dimensiones escalar asociativo escalar
    echo $_SESSION['personas'][0]['nombre'];

    //¿DONDE SE GUARDAN ESTOS DATOS?
    /*Con F12 en el navegador (Herramentas para desarrolladoes) >aplicacion > cookies*/

//borrar la fila con la clave asoscioativa 'sesion'
   /* unset($_SESSION['sesion']);

    echo '<pre>';
    print_r($_SESSION);
    echo '<pre>';
    */


?>