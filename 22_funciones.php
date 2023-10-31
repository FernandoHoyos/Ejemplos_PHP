<?php
echo "<h3>Funciones existen 4 modos:</h3>";
    
echo "<p>1.- función SIN parámetros de entrada y que no devuelven nungún resultado</p>";

    /*Las funciones antes de ejecutar la linea de codigo en php
    no importa en donde llamarla porque las carga todas las que existan
    en memoria, asi que no importa en donde la pongamos para llamarla */

    saludar();
    function saludar() {
        echo 'Hola mundo';
    }
    //saludar();
    echo "<hr>";

echo "<p>2.- función con UN parámetro de entrada y que no devuelve ningún resultado</p>";

    saludarNombre('Arch Stanton');
    function saludarNombre($nombre){
        echo "Hola $nombre";
    }
    echo "<hr>";

echo "<p>3.- función con DOS parametros de entrada y que NO DEVUELVE UN RESULTADO</p>";

    sumar(4, 6);
    function sumar($a, $b){
        echo $a + $b;
    }
    echo "<hr>";

echo "<p>4.- funcion con DOS parámetros de entrada y que DEVUELVE UN RESULTADO (RETURN)</p>";

    // Todas las variables que se crean dento de una funcion solo existen dentro de la funcion.
    /* Utilizamos la variable ($resul) para poder llamar el contenido del return, 
    ya que no es posible llamarla normalmente. Esto se utiliza solo para RETURN*/
    $resul = multiplicar(4, 5);

    echo $resul;

    function multiplicar($n, $d){
        $resultado = $n * $d;
        //echo $resultado;
        return $resultado; //Se utiliza una variable ($resul) para poder sacar el return de la funcion.
    }

/*En JavaScript existen tres la ¿anterios(puede ser ternarios)? y estas dos:
    //asignacion a variable
    var saludar = function(){
        document.write('Hola mundo');
   }
    //asignacion flecha, REVISAR
    var saludar = ()=>{
        document.write('Hola mundo');
    }
    "*/
?>