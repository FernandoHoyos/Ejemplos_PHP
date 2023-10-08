<?php 
    //variables
    $texto = "Soy un texto";

    echo "<h3>Tipos de variables</h3>";
    $nombre = 'Arch Stanton'; echo "<p>Tipo texto</p>";
    $edad = 50; echo "<p>Tipo numérico</p>";
    $aceptar = true; echo "<p>Tipo booleano</p>";

    echo "<h3>Concatenar texto con variables</h3>";
    echo 'Hola, me llamo '.$nombre;
    echo '<br>';
    echo "Hola, me llamo $nombre"; //JS: `Hola me llamo ${nombre}`
    echo '<br>';

    echo "<h3>Variables booleanas</h3>";
    $continuar = false;
    echo $continuar; //se mostrará 1 para true y ausencia de valor para false
    echo '<br>';

    echo "<h3>Suma de variables</h3>";
    $numero1 = 4;
    $numero2 = '5';
    $numero3 = 6;

    $resultado = $numero1 + $numero2 + $numero3;

    echo $resultado; //15
    $numero1 = 20;
    echo '<br>';

    echo "<h3>Constantes</h3>";
    const PI = 3.141592;
    echo PI;
?>
