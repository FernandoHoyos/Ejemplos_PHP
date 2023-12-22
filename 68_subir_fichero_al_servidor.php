<?php
/*
Al no ser solo texto es obligatorio que el metodo de envio sea method="POST" y enctype 
de lo contrario el fichero no se enviara al servidor
*/
//comprobar si llega el formulario
    if (isset($_POST['enviar'])) {
        //recuperar la descripcion
        $descripcion = $_POST['descripcion'];

        //recuperar los datos del archivo, este se guarda en una super variable llamada $_FILES
        echo '<pre>';
        print_r($_FILES); // Aqui se guardan los datos del archivo. [error] => 4 sirve para saber si se ha enviado el fichero o no.
        echo '</pre>';

        /*Esta super variable contiene toda la informacion del servidor.
        echo '<pre>';
        print_r($_SERVER); // Esta super variable contiene toda la informacion del servidor.
        echo '</pre>';
        */

        try {
        $tipo = $_FILES['fichero']['type'];
        $peso = $_FILES['fichero']['size'];

        //validar que el archivo sea de tipo pdf y no supere los 200kb
        //if ($tipo != 'aplication/pdf') {//este primer if puede ser modificada la extension para causar que se suba otro tipo.
        if(!stripos($tipo, 'pdf')){ 
            throw new Exception("Sólo se permiten archivos de tipo pdf");
        }
        
        //Que el archivo no supere el tamaño indicado
        if ($peso > 234496) {
            throw new Exception("El tamaño del archivo no puede superar los 229kb");
            
        }

        /*
        si no hacemos nada mas el fichero que hemos subido se pierde al finalizar la ejecucion del programa.
        Para conservarlo hay que moverlo a una carpeta definitiva
        */
        $nombreTmp = $_FILES['fichero']['tmp_name'];//Este es un array de dos dimensiones.
        $nombreArchivo = $_FILES['fichero']['name'];

        if (move_uploaded_file($nombreTmp, "68_archivos_subidos/$nombreArchivo")){//la carpeta tiene que estar en el mismo sitio del archivo del formulario.
            echo "<strong>Archivo subido correctamente.</strong><br>";
            } else {
            echo "Ha ocurrido un error al subir el archivo";
        }
        } catch (Exception $e) {
          echo $e->getMessage();
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Subir fichero</title>
</head>
<body>
    <form action="#" method='post' enctype="multipart/form-data">
        <input type="text" name='descripcion' placeholder='Descripción fichero'><!--No se para qu es puso este input-->
        <br><br>
        <input type="file" name="fichero">
        <br><br>
        <input type="submit" value="Enviar fichero" name='enviar'>
        <p>Presiona Enviar para ver el array $_FILES</p>
    </form>
</body>
</html>