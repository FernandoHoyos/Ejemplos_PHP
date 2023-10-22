<?php
//Mostrar el resultado en la misma pagina para no perder el formulario.
   
//Detectar de manera indirecta, cuando el usuario pulsa el boton del formulario

/*
Tambien se puede usar isset para comprobar si existe una variable:
   $variable = 1;
   if (isset($variable)){
    echo "La variable existe";
   } else{
    echo "La variable no existe";
   }
*/

/*
Visualizar en pantalla el contenido de un array:
print_r($_GET);
*/


//Inicializar variables utilizadas en el documento HTML con nulos o vacios.
//$resultado = '';
//$nota = 'null';

// De forma abreviada.
$resultado = $nota = null; 



    //Todo el codigo va dentro del siguiente if.
    if (isset($_POST['evaluar'])){

//recuperar la nota que llega del formulario
    $nota = $_POST['nota'];

//evaluar la nota:

    if (empty($nota)) {
        // Si no se introduce nada mostrar 'Nota obligatoria'
        /*Podemos remplazar los echo por una $resultado para ubicar el 
        resultado en la pantalla, este siempre se tiene que poner dentro de value*/
        //$resultado = "Nota obligatoria";
        echo "Nota obligatoria";
    } else if (!is_numeric($nota)) {
        //Si la nota no es numérica mostrar el texto 'nota no numérica'
        echo "Nota no numérica";
    } else if ($nota < 0 || $nota > 10) {
        //Si la nota es menor que 0 o mayor que 10 mostrar 'nota no válida'
        //$resultado = "Nota no válida";
        echo "Nota no válida";
    } else if ($nota == 10) {
        //Si la nota es igual a 10 mostrar el texto 'Matrícula de Honor'
        $resultado = "Matrícula de Honor";
        //echo "Matrícula de Honor";
    } else if ($nota >= 9) {
        //Si la nota es mayor o igual a 9 mostrar el texto "Excelente"
        $resultado = "Excelente";
        //echo "Excelente";
    } else if ($nota >= 7) {
        //Si la nota es mayor o igual a 7 mostrar el texto "Notable"
        $resultado = "Notable";
        //echo "Notable";
    } else if ($nota > 5) {
        //Si la nota es mayor que 5 mostrar el texto “Aprobado"
        $resultado = "Aprobado";
        //echo 'Aprobado';
    } else if ($nota < 5) {
        //Si la nota es menor que 5 mostrar “Suspenso”
        $resultado = "Suspenso";
        //echo "Suspenso";
    } else {
        //SI la nota es igual a 5 mostrar “Por los pelos”
        $resultado = "Por los pelos";
        //echo "Por los pelos";
    }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nota exámen</title>
</head>
<body>
    <form method="POST" action="#">
        <label>Poner la nota: </label>
    <!--
        Con step="0.1" se puede añadir float o decimales.
        Para mantener el dato de input introducido, usamos un echo en value: (<php echo $nota?>).
        Si se utiliza la bifurcacion ?? da un valor por defecto en caso de que no exista una 
        variable (<php echo $nota ?? null o ''?>).
    -->
    
    <input type="number" name="nota" placeholder="Aquí" step="0.1" value="<?php echo $nota ?? null ?>" //min="0"max="10"required >
    <input type="submit" value='Evaluar Nota' name="evaluar">
    <!--Todos los atributos que no tenga disabled se envian al servidor-->
    <input disabled type="text" value="<?php echo $resultado ?>">

    </form>
</body>
</html>
