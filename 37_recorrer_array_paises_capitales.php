<?php
//crear un array asociativo con la relacion pais-capital de 5 estados.

$paises['Francia']    = 'Paris';
$paises['Ecuador']    = 'Quito';
$paises['Italia']     = 'Roma';
$paises['Alemania']   = 'Berlin';
$paises['Argentina']  = 'Buenos Aires';
$paises['Colombia']   = 'Bogota';


//recorrer el array para mostrar la capital de cada pais (array asociativa)
 //Instrución específica para recorrer un array mostrando las claves "indices" y los valores:
   //      array     clave     valor 
 foreach ($paises as $pais => $capital) {
        //el simbolo => es el que hace el recorrido de las claves.
        echo "La capital de $pais es $capital <br>";
    }


?>