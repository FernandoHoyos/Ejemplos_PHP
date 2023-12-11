<?php
/*Tenemos varias opciones para leer el fichero por eso son accesos avanzados, estos ficheros son comparables a una cinta de casset*/
    header('Content-Type: text/html; charset-utf-8');
    //abrir el fichero (nombre_del_fichero, modo) 
    /*los modos estan en la pagina 79 de PHP3, los mas utilizados son 'r' y el 'r+'
    fopen toma el control del fichero y no permite que otro pueda entrar a el*/
    $identificador = fopen('ficheros/59_fichero.txt', 'a+');//r+ es el modo de lectura/escritura similar a una cinta de casset este es el que continua en donde se dejo.

    //leer el fichero caracter a caracter
    //$caracter = fgetc($identificador);//Esta liena identifica ¿...?
    //echo $caracter;

    echo "<p>//como leer la totalidad del fichero con un while:</p>";
    while (!feof($identificador)) {
        $caracter = fgetc($identificador);

        echo "$caracter _";
    }

    echo '<hr><hr>';

    //leer el fichero fila a fila comenzamos desde el principio, es comparable a la cinta de casset que empezaba en donde se dejaba
    rewind($identificador);//rewind rebobobina la lectura del fichero o lee desde el inicio

    while (!feof($identificador)) {
        $fila = fgets($identificador);//El fgets lee linea alinea y no sobre escribe el contenido
    
        echo $fila;
    }
        /*LINEAS SIN USAR EL BUCLE WHILE
            $fila = fgets($identificador);//Las lineas 31, 32 son las mismas del bucle, pero sin bucle jajajja.
            echo $fila;//Esta variable fila sale del while
        */

    echo '<hr><hr>';

    //leer el fichero para obtener el numero de caracteres que especifiquemos
    rewind($identificador);//leer desde el inicio del fichero, estilo cinta de casset

    $contenido = fread($identificador, 5);

    echo $contenido;

    //escribir en el fichero
    rewind($identificador);

    $nuevoContenido = "\nNos vemos otro dia";
    
    echo $nuevoContenido;

    fwrite($identificador, $nuevoContenido);//este se añade en donde se encuentre el puntero.

    //cerrar el fichero para liberar recursos del servidor
    fclose($identificador);
?>