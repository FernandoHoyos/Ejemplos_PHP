<?php
    $texto = "Los impuestos de las rutas comerciales a los 
    sistemas estelares exteriores están en disputa. Esperando 
    resolver el asunto con un bloqueo de poderosas naves de guerra, 
    la codiciosa Federación de Comercio ha detenido todos los envíos 
    al pequeño planeta de Naboo. (Episodio 1)";

echo "<h3>Extraer un fragmento del texto desde una posicion </h3>";
    //                  texto, posicion, nº de caracteres
    $fragmento1 = substr($texto, 0, 36);

    echo "$fragmento1 <br>";

echo "<h3>Extraer un fragmento desde un caracter especifico</h3>";
    //Ejemplo:          Pajar, aguja, 
    $fragmento2 = strstr($texto, 'im');

    echo "$fragmento2 <br>";

echo "<h3>Longitud de una cadena de texto (Cantidad de caranteres incluyendo los espacios)</h3>";
    $longitud = strlen($texto);

    echo "$longitud <br>";

echo "<h3>Reemplazar un fragmento de texto por otro distinto</h3>";
    //                         texto_de_contenido, texto_a_cambiar, variable del text
    $nuevoTexto = str_replace('comerciales', 'de contrabando', $texto);
    echo "$nuevoTexto <br>";

    //eliminar dobles espacios en blanco dentro del texto
    $nuevoTexto = str_replace('  ', ' ', $texto);

    echo "$nuevoTexto <br>";

echo "<h3>Eliminar dobles espacios en blanco al principio y al final</h3>";
    $nuevoTexto = trim($texto);

    echo "$nuevoTexto <br>";

echo "<h3>Convertir un texto a mayúsculas</h3>";
    $textoMayusculas = strtoupper($texto);
    echo "$textoMayusculas <br>";

echo "<h3>Convertir un texto a minusculas</h3>";
    $textoMinusculas = strtolower($texto);
    echo "$textoMinusculas <br>";

echo "<h3>Convertir la primera letra del texto a mayúsculas</h3>";
    $textoMinusculas = ucfirst($textoMinusculas);
    echo "$textoMinusculas <br>";

echo "<h3>Posición que ocupa la primera aparición de un carácter en la cadena de texto</h3>";
    $posicion = strrpos($texto, 'naves');//posicion 163
    echo "$posicion <br>";

    //posición que ocupa la última aparición de un carácter en la cadena de texto
    $posicion = strrpos($texto, 'de');

    echo "$posicion <br>";


    //posición que ocupa la primera aparición de un carácter en la cadena de texto con independencia si está en mayúsculas o minúsculas
    $texto = "En un lugar de la Mancha de cuyo nombre no quiero acordarme...";

    $posicion = stripos($texto, 'm');

    echo "$posicion <br>";

    //posición que ocupa la última aparición de un carácter en la cadena de texto con independencia si está en mayúsculas o minúsculas
    $posicion = strripos($texto, 'm');

    echo "$posicion <br>";
    
?>