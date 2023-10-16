<?php 
    //recoger los datos del formulario
    $nombrePersona  = $_GET['nombre'];
    //$edad       = $_GET['edad'];
    $telefono   = $_GET['telefono'];
    $password   = $_GET['password'];

    //alternativa para recoger los datos del formulario utilizando la función filter_input()
    //                   Tipo envio, name, filtros de validación
    $edad = filter_input(INPUT_GET, 'edad', FILTER_VALIDATE_INT);

    echo "Datos persona: $nombrePersona $edad $telefono $password";

?>