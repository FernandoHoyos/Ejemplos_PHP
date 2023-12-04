<?php
    /*si es la primera vez que accedemos a la pagina inicializamos el contador a 1 y,
    en caso contrario, asignamos al contador el contenido de la Cookie.*/

    //opcion 1: utilizando isset
    /*
    if (isset($_COOKIE['contador'])) {
        $contadorCookie = $_COOKIE['contador'] + 1;
    } else {
        $contadorCookie = 1;
    }
    */

    //opcion 2: utilizando la asignacion condicional
    $contadorCookie = $_COOKIE['contador'] ?? 0;
    $contadorCookie++;

    //refrescar la cookie (crearla si no existe o modificarla si ya existe)
    setcookie('contador', $contadorCookie, time() + 3600 * 24 *365);

     echo "Veces visitada: $contadorCookie";

    //Al parecer las cookies no se eliminan ni reiniciando el pc, session.ccokie lifetime=0
?>