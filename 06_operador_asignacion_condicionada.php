<?php 

    $nombre = 'Arch Stanton';

    //asignar a una variable el valor que contenga la variable nombre en caso de que ésta exista y tenga un valor válido o el valor 'sin usuario' en caso contrario
    if ($nombre) {
        //la variable nombre es válida
        $usuario = $nombre;
    } else {
        $usuario = 'sin usuario';
    }

    echo $usuario;

    echo '<hr>';

    //mismo procedimiento pero utilizando el nuevo operador ??
    $usuario = $nombre ?? 'sin usuario';

    echo $usuario;
?>