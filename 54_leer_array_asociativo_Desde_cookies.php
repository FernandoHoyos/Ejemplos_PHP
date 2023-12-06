<?php
//1. leer un array asociativo en formato JSON desde una cookie
$paisesJson = $_COOKIE['paises'];

echo $paisesJson;
//2. convertir el formato JSON de nuevo a array asociativo
$paises = json_decode($paisesJson, true);//false es el valor por defecto, si no se pone el true se creara un objeto que no podremos utilizar en arrays y deberemos de convertirlo a un array.

echo '<pre>';
print_r($paises);
echo '</pre>';

echo $paises['Colombia'];
?>