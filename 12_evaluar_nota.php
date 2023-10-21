<?php 
    //recuperar la nota que llega del formulario
    $nota = $_POST['nota'];

    //evaluar la nota:

    if (empty($nota)) {
        // Si no se introduce nada mostrar 'Nota obligatoria'
        echo "Nota obligatoria";
    } else if (!is_numeric($nota)) {
        //Si la nota no es numérica mostrar el texto 'nota no numérica'
        echo "Nota no numérica";
    } else if ($nota < 0 || $nota > 10) {
        //Si la nota es menor que 0 o mayor que 10 mostrar 'nota no válida'
        echo "Nota no válida";
    } else if ($nota == 10) {
        //Si la nota es igual a 10 mostrar el texto 'Matrícula de Honor'
        echo "Matrícula de Honor";
    } else if ($nota >= 9) {
        //Si la nota es mayor o igual a 9 mostrar el texto "Excelente"
        echo "Excelente";
    } else if ($nota >= 7) {
        //Si la nota es mayor o igual a 7 mostrar el texto "Notable"
        echo "Notable";
    } else if ($nota > 5) {
        //Si la nota es mayor que 5 mostrar el texto “Aprobado"
        echo 'Aprobado';
    } else if ($nota < 5) {
        //Si la nota es menor que 5 mostrar “Suspenso”
        echo "Suspenso";
    } else {
        //SI la nota es igual a 5 mostrar “Por los pelos”
        echo "Por los pelos";
    }

?>

<!--Esto lo añado solo para ver el titulo de la pestaña-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nota examen final</title>
</head>
<body>
    
</body>
</html>