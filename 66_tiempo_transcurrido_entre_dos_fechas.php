<?php
//tiempo (en dias) transcurrido entre el 1 de enero del 2023 hasta hoy, tambien se puede cambiar a meses.

//1. informar la fecha de inicio y la fecha final (dia actual)
    $fechadesde = "2023-01-01 00:00:00";
    $fechahasta = strtotime('now');

//2. tranformar la fecha desde a formato unix
$fechadesde = strtotime($fechadesde);

echo "Fecha desde: $fechadesde / Fecha hasta: $fechahasta <br>";

//3. calcular la diferencia en segundos entre las dos fechas
$segundos = $fechahasta - $fechadesde;

echo "$segundos segundos <br>";

//4. calcular el número de dias que corresponden con el número de segundos obtenidos en el paso anterior
$dias = intval($segundos / 24 / 3600);
echo "$dias dias <br>";

?>