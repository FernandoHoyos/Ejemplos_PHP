<?php
$paises = ['Francia' => 'Paris', 'Ecuador' => 'Quito', 
'Italia' => 'Roma', 'Alemania' => 'Berlin', 'Argentina' => 'Buenos Aires', 
'Colombia' => 'Bogota'];

//comprobar si existe un valor (capital)
if (in_array('Paris', $paises)) {
    echo 'el valor existe';
}else {
    echo 'el valor no existe';
}

echo '<hr>';

//comprobar si existe una clave (pais)
if (array_key_exists('Francia', $paises)) {
    echo 'la calve existe';
}else {
    echo 'la clave no existe';
}

echo '<hr>';

//buscar un valor en un array para consultar su clave
$clave = array_search('Bogota', $paises);
echo $clave;

?>