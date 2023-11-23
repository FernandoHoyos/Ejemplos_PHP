<?php
    //Lista de variables
    $nombre = 'Arch Station';
    $direccion = 'Av cementerio, 56';
    $poblacion = 'Sad Hill';

    //confeccionar un array asociativo apartir de las variables

    $datosPersona = compact('nombre', 'direccion', 'poblacion');

    echo '<pre>';
    print_r($datosPersona);
    echo '</pre>';

    //confeccionar tres variables a partir de las claves asociativas y los valores del array
    $nombre = $direccion = $poblacion = null;

    extract($datosPersona);

    echo "$nombre / $direccion / $poblacion";

?>