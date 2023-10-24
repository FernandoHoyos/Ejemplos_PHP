<?php
    $ciudad = 'Granada';

    //evaluar el contenido de la variable ciudad
    //DRY Don't Repeat Yourself
    switch ($ciudad) {
        case 'Barcelona':
            echo 'Cataluña';
            break;
        
        /* Para evitar esta repeticion de codigo lo quitamos
        hasta que este dentro todos los datos que sean similares
        como en este caso.
            echo 'Andalucia';
            break;
        */
        case 'Sevilla':
           // echo 'Andalucia';
           // break;

        case 'Granada':
           // echo 'Andalucia';
            //break;

        case 'Almeria':
                echo 'Andalucia';
                break;
        default: // Si el valor de de la variable no es ninguno de los anterioes
            echo 'Ciudad no contenplada';
            break;
    }

?>