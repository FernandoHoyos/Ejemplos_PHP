<?php
//Los array no se guardan en una TXT porque no es un texto plano es como un objeto para ello se puede utilizar este tipo de conversion si no se cuenta con una DB.
    echo "<p>//1.- convertir una lista de valores a array </p>";
    $colores = "negro, rojo, azul, verde, amarillo, blanco"; 

    echo $colores;

    $arrayColores = explode(', ', $colores); //la coma es el valor que separa los elementos.
    /*
    El nombre del color negro queda desplazado un poco a al izquierda, 
    en este caso el espacio en blanco puede presentar problemas 
    y se tiene que poner el espacio tambien con el separador (coma y espacio).
    */
    echo '<pre>';
    print_r($arrayColores);
    echo '</pre>';

    echo "<p>//2.- convertir una array en una lista de valores </p>";
    
    sort($arrayColores);
    $colores2 = implode(', ', $arrayColores);//El separador puede ser cualquer caracter (; / * - + etc..).
    echo $colores2;



?>