<?php
//ME DA UN WARNINDG DE ARRAY NO DEFINIDO

    //crear una cookie (En las cookies solo adminten string y son elementos asociativos.)
    $contenidoCookie1 = 'Hola mundo';
    $contenidoCookie2 = 'Adiós mundo<br>';

    echo "Tiempo UNIX: ", time(); //tiempo en segundos que han trascurrido desde el 1/1/70 (tiempo UNIX)
    echo '<hr>';
    
    //Nombre de la cookie, contenido, tiempo de expiración, visibilidad (el contenido de una cookie no puede ser un array)
    setcookie('inicio', $contenidoCookie1, time() + 3600 * 24 * 365);//la vigencia de la cookie parte de una hora (3600) desde aqui se multiplica para alargar su existencia.
    
    setcookie('final', $contenidoCookie2, time() + 3600);

    //Leer el contenido de todas las cookies asociadas al dominio.
    echo '<pre>';
    print_r($_COOKIE);
    echo '</pre>';

    echo '<hr>';
    //leer el contenido de una cookie especifica
    echo $_COOKIE['inicio'];
    echo '<br>';
    echo $_COOKIE['final'];//pagina 4.. 42

    //borrar un cookie (tenemos que utilizar un tiempo de expiracion pasado)
    //setcookie('final', null, time() - 1);

    echo '<hr>';
    print_r($_COOKIE['52_leer_cookie_subcarpeta']);
    
    //AL PARECER LAS COOKIES NO SE ELIMINAN NI REINICIANDO EL PC, session.ccokie lifetime=0
?>