<?php 
    //inicializar variables
    $checks = [];
    //comprobar si llega el formulario
    if (isset($_POST['enviar'])) {
    
        //recuperar los checks seleccionados y, si no llega ningún valor, asignar un array vacio
        $checks = $_POST['check'] ?? []; // se le asigna ?? [] un array vacio por defecto en el caso de que no seleccionara ninguna casilla check.

        //mostrar los valores por pantalla
        //echo $checks;//Este al convertirse en un array no funciona ya que se usa print_r para mostrar
        print_r($checks);
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enviar Check al servidor</title>
    <style>
        label {display: inline-block; width: 100px;}
    </style>
</head>
<body>
    <form action="#" method = 'post'>
        <label>Aficiones:</label>
        <br>
        <span>Lectura</span>
        <!--Con los checks hay que añadirles los [] para que les llegue un array-->
        <input type='checkbox' name='check[]' value='LE' <?php if (in_array('LE', $checks)) {echo 'checked';}?>>
        <span>Música</span>
        <input type='checkbox' name='check[]' value='MU' <?php if (in_array('MU', $checks)) {echo 'checked';}?>>
        <span>Cine</span>
        <input type='checkbox' name='check[]' value='CI' <?php if (in_array('CI', $checks)) {echo 'checked';}?>>
        <span>Viajar</span>
        <input type='checkbox' name='check[]' value='VI' <?php if (in_array('VI', $checks)) {echo 'checked';}?>>
        <span>Cocina</span>
        <input type='checkbox' name='check[]' value='CO' <?php if (in_array('CO', $checks)) {echo 'checked';}?>>
        <br><br>
        <input type='submit' name='enviar'>
    </form>