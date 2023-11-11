<?php 

/*se basa en obtener el resto de la división entera del número de DNI y el número 23. 
A partir del resto de la división, se obtiene la letra seleccionándola dentro de un array 
de letras.
Por tanto, si el resto de la división es 0, la letra del DNI es la T 
y si el resto es 3 la letra es la A.*/

/*Almacene en una variable el número de DNI indicado por el usuario y en otra variable la letra del DNI 
que se ha indicado.
●En primer lugar (y en una sola instrucción) se debe comprobar si el número es menor 
que 0 o mayor que 99999999. Si ese es el caso, se muestra un mensaje al usuario indicando que el número 
proporcionado no es válido y el programa no muestra más mensajes.
●Si el número es válido, se calcula la letra que le corresponde según el método explicado anteriormente. 
●Una vez calculada la letra, se debe comparar con la letra indicada por el usuario. Si no coinciden, 
 muestra un mensaje al usuario diciéndole que la letra que ha indicado no es correcta. En otro caso, 
 se muestra un mensaje indicando que el número y la letra de DNI son correctos.*/


/*$letras reemplazamos esta variable por una constante ya que el contenidod del array no cambiara*/

const LETRAS =  ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];

    /*echo "<pre>";
    print_r($letras);
    echo "</pre>";*/

$numero = "40000001";
$letra = "A";

//validar número dentro de rango
if ($numero < "00000000" || $numero > "99999999") {
    die("numeo fuera de rango");//die es como un echo solo para pruebas.
}

//calcular la letra
if (verificarNif($numero, $letra)){
    echo "NIF correcto";
} else {
    echo "NIF incorrecto";
}

//Comprobacion de letra.
function verificarNif($numero, $letra){
    $resto = $numero % 23;
    $letraArray = LETRAS[$resto];

    if ($letra == $letraArray) {
        return true;
    } else {
        return false;
    }
    
}




?>