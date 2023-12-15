<?php
    //generar un número aleatorio dentro de un rango
    echo rand(1, 100);

    echo '<br>';

echo "<h3> //redondear un número para mostrar un determinado numero de decimales</h3>";
    echo round(100.125456, 2);//el punto en programacion es la coma decimal

//obtener el valor absoluto de un número
echo abs(-6);

echo '<br>';

//obtener el valor entero de un número
echo intval(100.925456);

echo '<br>';

//obtener un hash único para utilizarlo, por ejemplo, como contraseña o identificador de una sessión
echo uniqid();
?>