<?php
//Los ficheros se guardan en el servidor y solo se puede guardar texto, no importa el tipo de formato, para hacerlo existen tres formas:
//1. leer el fichero en su totalidad y lo guardamos en una variable (si el fichero no existe tendremos un warning).
$contenido = file_get_contents('ficheros/58_fichero.txt');

echo "Contenido var de file_get_contens:<br><br> $contenido";

/*include('ficheros/58_fichero.txt');//Esta no es la manera correcta de hacerlo en el caso de que utilicen para hacer alguna cosa.*/
echo '<hr>';

//2. leer el fichero en su totalidad mostrando en pantalla el contenido del mismo (equivalente al include), este metodo es solo para mostrar en pantalla algo que desee, (si no existe el fichero dara un warning al tratar de leerlo).
echo "Contenido con readfile: <br><br>";

readfile('ficheros/58_fichero.txt');

echo '<hr>';

//3. leer el fichero linea a linea guardando cada linea en un array, puede ser util ¿para? 
//$arrayLineas = file('ficheros/58_fichero.txt');
$arrayLineas = file('ficheros/58_fichero.csv');

echo '<pre>';
print_r($arrayLineas);//al ser un array utilizamos print_r
echo '</pre>';

//escribir en un fichero (si el fichero no existe al momento de escribir se creara automaticamente)
$nuevoContenido = "Adios mundo\n¿Qué tal estás?\nYo mejorando";//los saltos de linea solo funcionan entre comillas dobles.

file_put_contents('ficheros/58_fichero.txt', $nuevoContenido);//El fichero anterior se sobre escribe por completo.

//escribir el fichero pero conservando el contenido que ya tenia
    //1. recuperar el contenido actual
    $contenidoActual = file_get_contents('ficheros/58_fichero.txt');
    
    //2. confeccionar el contenido a añadir
    $nuevoContenido = "\nHola Mundo\nNos vemos pronto";

    //3. sobre escribir el fichero
    file_put_contents('ficheros/58_fichero.txt', $contenidoActual.$nuevoContenido);

/*
Nota archivos csv:
 Los archivos con valores separados por comas (CSV) son archivos de texto que puede utilizar
 para intercambiar datos entre aplicaciones desde una base de datos u hoja de cálculo. 
 Cada línea de un archivo de texto CSV representa un registro de la base de datos o una fila de la hoja de cálculo. 
 Los campos de un registro de base de datos o las celdas de una fila de hoja de cálculo suelen estar separados por comas. 
 Sin embargo, pueden utilizarse otros caracteres para delimitar los campos, como el tabulador.
*/
?>