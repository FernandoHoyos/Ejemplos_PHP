<?php 
    
    echo "<p>Imprimir (con echo) los números pares que hay entre el 0 y un número que introducimos en pantalla mediante formulario.</p>";
    

    //1. inicializar las variables que utilicemos en el documento html

    //2. comprobar si llega el atributo name del botón de submit
    if (isset($_GET['enviar'])) {
        //2.1 recuperar el numero del formulario
        $num = $_GET['numero'];

        //2.2 bucle for desde 0 hasta el número introducido en el formulario
        for ($c = 0; $c <= $num; $c++) {
            //comprobar con un if si el contador es par para mostrarlo en la pantalla
            if ($c % 2 == 0) {
                echo "$c <br>";
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Numeros pares</title>
</head>
<body>
    <form action="#" method="get">
        <input type="number" name='numero'>
        <input type="submit" name='enviar'>
    </form>
</body>
</html>