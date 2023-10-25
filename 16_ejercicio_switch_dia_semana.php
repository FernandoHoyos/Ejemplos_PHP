<?php 
    //inicalizar las variables php que usemos en el documento html
    $dia = null;

    //verificar si llega el atributo name del botón de submit
    if (isset($_POST['enviar'])) {

        //recuperar el número del formulario
        $numero = $_POST['numero'];

        //evaluar el número para determinar el dia de la semana
        switch ($numero) {
            case '1':
                $dia = 'Lunes';
                break;
            case '2':
                $dia = 'Martes';
                break;
            case '3':
                $dia = 'Miercoles';
                break;
            case '4':
                $dia = 'Jueves';
                break;
            case '5':
                $dia = 'Viernes';
                break;
            case '6':
                $dia = 'Sábado';
                break;
            case '7':
                $dia = 'Domingo';
                break;
            default:
                $dia = 'Dia no válido';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Día de la semana</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name='numero' value="<?php echo $numero ?? null ?>">
        <input type="submit" name='enviar'>
        <input type="text" disabled value="<?php echo $dia ?>">
    </form>
</body>
</html>