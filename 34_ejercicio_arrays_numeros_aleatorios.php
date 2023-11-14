<?php
//Array escalares.
    /*EJERCICIO
    Crear un array con 10 valores aleatorios entre 1 y 100 (*).
    Ordenar el array de menor a mayor 
    A continuación extraer el array en una cadena de caracteres separados por punto y coma
    En cada paso mostrar el del array resultante y la cadena de caracteres final. 

    (*) Para generar números aleatorios podemos utilizar $num=rand(1, 100);
    */
//1. crear un array con 10 numeros aleatorios.

//1.1 añadir elementos al array sin la funcion PHP.
/*//Este for crea el array.
for ($aal=0; $aal < 10; $aal++) { 
    $numeros[$aal] = rand(1, 100); //aqui se crea el array ($numeros[] =) y se añaden los valores (rand(1, 100))
}*/

//1.2 añadir elementos al array con la funcion push
//Este for es necesario crear el array
$numeros = []; //array_push exige que el array a utilizar exita previamente.

for ($i=0; $i < 10; $i++) { 
    array_push($numeros, rand(1, 100));
}

echo "<pre>";
print_r($numeros);
echo "</pre>";

//2. ordenar el array de menor a mayor
sort($numeros);

echo "<pre>";
print_r($numeros);
echo "</pre>";

//3. crear una lista a partir de array con los valores separados por ;
$lista = implode('; ', $numeros);
echo $lista;


?>