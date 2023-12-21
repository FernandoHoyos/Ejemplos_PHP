<?php
    //verificar que nos llega el formulario
    if (isset($_POST['enviar'])) {
        //informar los datos a utilizar en el envio del correo
        //informar los datos a utilizar o enviar en el envío del correo
        $destinatario = "david-alcoleda@alcyon-it.com";
        $asunto = "Nueva peticion desde el formulario de contacto";
        /*$mensaje = "<h2>Mensaje</h2><p><span style='color:blue'>Cuerpo del mensaje</span> 
        normalmente capturado desde un formulario</p>";*/
        $mensaje = $_POST['mensaje'];

        //informar datos de las cabeceras, para saber a quien va informado.
        //$nombreremitente = "Arch Stanton";
        //$emailremitente = "arch@mail.com";
        $nombreremitente = $_POST['nombre'];
        $emailremitente = $_POST['email'];
        $destinatario2 = "Connie Corlone<Connie@mail.com";

        //informar las cabeceras del correo
        $cabeceras = 
             "From: $nombreremitente<$emailremitente>\r\n".
             "Reply-To: $emailremitente\r\n".
             "Cc: $destinatario2\r\n".
             "MIME-Version: 1.0\r\n".
             "Content-Type: text/html; charset=UTF-8";  //Que tipo de contenido o informacion estamos enviando.

     //enviar el correo electronico
        if (mail($destinatario, $asunto, $mensaje, $cabeceras)){
            echo "email enviado correctamente";
        } else {
            echo "error al enviar el email";
        }
    }

    //Parece ser que con este metodo se puede camuflar con un email existente que no tengamos acceso para otros fines sin el formulario solo PHP.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
</head>
<body>
    <form action="#" method='post'>
        <input type="text" name="nombre" placeholder="Nombre y apellidos" required>
        <br><br>
        <input type="email" name="email" placeholder="usuario@mail.com" required>
        <br><br>
        <textarea name="mensaje" cols="30" rows="10" placeholder="Mensaje (máximo 300 caracteres)" required maxlength="300"></textarea>
        <br><br>
        <input type="submit" value="Enviar consulta" name='enviar'>
    </form>
</body>
</html>
