<?php 
    //iniciar variables.
    $radio = 'N';

    //comprobar si llega el formulario.
    if (isset($_POST['enviar'])) {
    
        //recuperar el radio seleccionado.
        $radio = $_POST['radio'] ?? 'N';//los radio si no les llega ningun valor se les asigna un valor ?? por defecto, lo que se conoce como asignacion a variable condicionada (existe_un_valor ?? no_existe_un_valor).

        /*
        //alternativa sin utilizazr el operador ?? o asignacion a variable condicionada
        if (isset($_POST['radio])){
            $radio = $_POST['radio'];
        }else{
            $radio = 'S';
        }
        */
        
        //mostrar el valor por pantalla.
        echo $radio;
        

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enviar radios al Servidor</title>
    <style>
        label {display: inline-block; width: 150px;}
    </style>
</head>
<body>
    <form action="#" method = 'post'>
        <label>Recoger en tienda</label>
        <span>Si</span>
        <input type='radio' name='radio' value='S' <?php if ($radio == 'S') {echo 'checked';}?>>
        <span>No</span>
        <input type='radio' name='radio' value='N' <?php if ($radio == 'N') {echo 'checked';}?>><!--mantener seleccion del checked radio-->
        <br><br>
        <input type='submit' name='enviar'>
    </form>
</body>
</html>