<?php
$paises = [
    'Francia' => 'Paris',
    'Ecuador' => 'Quito',
    'Italia' => 'Roma',
    'Alemania' => 'Berlin',
    'Argentina' => 'Buenos Aires',
    'Colombia' => 'Bogota'
];

echo '<pre>';
print_r($paises);
echo '</pre>';

echo $paises['Francia'];
echo '<hr>';

//GUARDAR EL ARRAY EN UNA COOKIE

//1. convertir el array a formato string (utilizar protocolo XML o JSON)// JSON es utilizado para intercambiar datos del lado servidor
$paisesString = json_encode($paises);
echo $paisesString;

//2. guardar el string en la cookie
setcookie('paises', $paisesString, time() + 3600);

/*Json es un formato de texto que forma parte del sistema de JavaScript y que se deriva de su sintaxis,
es el remplazo o alternativa a xtml y es un lenguaje usado para el intercambio de datos entre sistemas, 
pero no tiene como objetivo la creación de programas,
Json = siglas de JavaScript Object Notation, */
?>