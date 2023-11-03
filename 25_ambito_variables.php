<?php 
    //ambito o visibilidad de variables en PHP

    $a = "Soy una variable fuera de la funcion.\n";
    //echo $a; //veremos el contenido de la variable

    verVariables();

    echo $b.'Este Warning es intensional para saber que no esta definida la variable $b al estar fuera de la funcion'; // variable no definida
    //echo $a; //veremos el contenido de la variable
    

    function verVariables(){
        /*El calificado global se utiliza para poder utilizar una variable definida
        fuera de la funcion */
        //echo $a; //variable no definida, queda definida al usar global.
        global $a; //el global es solo de afuera hacia dentro.
        echo $a.'=> Y ahora estoy dentro de la funcion.'.'<br>'; //veremos el contenido de la variable global

        $a = 'Soy la variable local$a<br>';
        echo "$a"; //veremos el contenido de la variable

        $b = 'Soy la variable local$b<br>';
        echo "$b"; //veremos el contenido de la variable
    }

?>