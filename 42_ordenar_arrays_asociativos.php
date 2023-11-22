<?php

$paises = ['Francia' => 'Paris', 'Ecuador' => 'Quito', 
'Italia' => 'Roma', 'Alemania' => 'Berlin', 'Argentina' => 'Buenos Aires', 
'Colombia' => 'Bogota'];


echo '<pre>';
print_r($paises);
echo '</pre>';

//ordenar por orden ascendentes por los valores (capitales)
asort($paises);
echo '<pre>';
print_r($paises);
echo '</pre>';

//ordenar de forma descendente por los valores (capitales)
arsort($paises);
echo '<pre>';
print_r($paises);
echo '</pre>';

//ordenar de forma ascendente por las claves (paises)
ksort($paises);
echo '<pre>';
print_r($paises);
echo '</pre>';

//ordenar de forma descendente por las claves (paises)
krsort($paises);
echo '<pre>';
print_r($paises);
echo '</pre>';

//el shuffle() no se ha de utilizar porque por cada refresh del navegador se pierden las claves asociativas.

?>