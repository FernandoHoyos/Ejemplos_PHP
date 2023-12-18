<?php
    //tiempo en segundos transcurridos desde el 1/1/1970
    echo time();
    echo '<hr>';

    //obtener en un array todos los datos asociados a un afecha y hora deternimados
    //setlocale(LC_ALL, "es_ES"); investigar más a fondo.
    $datosFecha = getdate();
    echo '<pre>';
    print_r($datosFecha);
    echo '</pre>';

    //Si desea dar un formato de fecha
    echo "$datosFecha[weekday] $datosFecha[mday] of $datosFecha[month] $datosFecha[year]";
    echo '<hr>';

    //validar una fecha, nos sirve para afirmar si la fecha que llegara al servidor es correcta y no ha sido manipulada por el usuario
    if (checkdate(2, 28, 2023)) {
        echo 'Fecha correcta';
    } else {
        echo "Fecha no válida";
    }
    echo '<hr>';

    //Transformar una fecha/hora a formato unix. (Mejor que el de la pagina 18 PHPDOC3)
    //formatos fechas: https://www.php.net/manual/es/datetime.formats.date.php

   //formatos horas: https://www.php.net/manual/es/datetime.formats.time.php

    //              fecha       hora
    echo strtotime('28-02-2023 04:08:37');

?>