<?php
//El array escalar para guardar datos relacionados entre si no es demasiado util, las posibildades de cometer un error son grandes.
$datosPersona[0] = 'Luis Rodriguez';
$datosPersona[1] = '44444444P';
$datosPersona[2] = 'c/ Pepe Gotera s/n';
$datosPersona[3] = 'Barcelona';
$datosPersona[4] = '08000';

echo "Nombre y apellidos: .$datosPersona[0]<br>";

//Mismo ejemplo, pero utilizando un array asociativo:
//Para ello modificamos las claves escalares por el tipo de tado significativo que se guardara en el array.

$datosPersonaAsoc['nombre'] = 'Luis Rodriguez';
$datosPersonaAsoc['nif'] = '44444444P';
$datosPersonaAsoc['direccion'] = 'C/ Pepe Gotera s/n';
$datosPersonaAsoc['poblacion'] = 'Barcelona';
$datosPersonaAsoc['cp'] = '08000';

//En los arrays asociativos las comillas de las claves presentan un error hay que quitarlas.
/*
Parse error: syntax error, unexpected string content "", expecting "-" or identifier or variable or number
*/
//echo "$datosPersonaAsoc['nombre'] // $datosPersonaAsoc['direccion'] "; //Error con comillas.
echo "$datosPersonaAsoc[nombre] - $datosPersonaAsoc[direccion] ";
?>