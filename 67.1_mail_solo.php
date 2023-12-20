<?php

    //informar los datos a utilizar o enviar en el envío del correo
    $destinatario = "david-alcoleda@alcyon-it.com";
    $asunto = "Nueva peticion desde el formulario de contacto";
    $mensaje = "<h2>Mensaje</h2><p><span style='color:blue'>Cuerpo del mensaje</span> 
    normalmente capturado desde un formulario</p>";

    //informar datos de las cabeceras, para saber a quien va informado.
    $nombreremitente = "Arch Stanton";
    $emailremitente = "arch@mail.com";
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


    //Parece ser que con este metodo se puede camuflar con un email existente que no tengamos acceso para otros fines sin el formulario solo PHP.
?>