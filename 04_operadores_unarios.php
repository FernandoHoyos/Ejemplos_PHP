<?php 
    echo "<h3>Operador unario suma</h3>";
    $a = 4;
    $a++; //equivale a $a = $a + 1
    echo $a;
    echo '<br>';

    echo "<h3>Combinar unario con asignación</h3>";
    $b = 5; echo "b = 5<br>";
    $c = ++$b; echo "c = ++b<br>";
    echo "<p>Resultado: b = $b c = $c</p>"; //6 6 - 6 5
    echo "<p>Al valor de b = 5 se le suma 1 y c = ++b muestra el resultado de c en autoincremento de b.</p>";

    
?>