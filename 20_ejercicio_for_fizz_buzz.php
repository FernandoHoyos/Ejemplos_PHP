<?php 
    /*
    Imprimir los números del 1 a otro número introducido mediante formulario:
        ●Para números divisibles por 3, imprimir “Fizz”. 
        ●Para números divisibles por 5, imprimir “Buzz”. 
        ●Para números divisibles por 3 y 5, imprimir “FizzBuzz”. 
        ●En cualquier otro caso, imprimir el número.
    */

    /*
        Ejemplo: 15
        1
        2
        Fizz
        4
        Buzz
        Fizz
        7
        8
        Fizz
        Buzz
        11
        Fizz
        13
        14
        FizzBuzz
    */

    //inicializar variables

    //comprobar si se ha pulsado el botón (isset)
    if (isset($_POST['enviar'])) {
        //recuperar datos del formulario
        $num = $_POST['numero'];

        //mostrar en pantalla los números del 1 hasta el introducido en el formulario según las especificaciones:
        for ($c = 1; $c <= $num; $c++) {
            if ($c % 3 == 0 && $c % 5 == 0) {
                //si el contador del bucle es divisible entre 3 y 5: FizzBuzz
                echo "FizzBuzz<br>";
            } else if ($c % 3 == 0) {
                //si el contador del bucle es divisible entre 3: Fizz
                echo "Fizz<br>";
            } else if ($c % 5 == 0) {
                //si el contador del bucle es divisible entre 5: Buzz
                echo "Buzz<br>";
            } else {
                //cualquier otro caso mostrar el numero
                echo "$c <br>";
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Numero divisible 3, 5, 3 y 5</title>
</head>
<body>
    <form action="#" method='post'>
        <input type="number" name='numero'>
        <input type="submit" name='enviar'>
    </form>
</body>
</html>