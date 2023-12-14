<?php

//extensiones permitidas
$extensionesValidas = ['jpg', 'png', 'gif', 'jpeg'];

//archivo a inspeccionar
$archivo = "episodio_1_.jpT";

    //extraer la extensión del archivo (sin el punto)

echo "<h2>Pasos para tener un control de extensiones de un archivo:</h2>";


echo "<h3>1. Conocer en que posicion se encuentra la extensión del archivo (la posición del ultimo punto):</h3>";
$extension = strrpos($archivo, '.');

echo "$extension <br>";

echo "<h3>2. Extraer la extensión del archivo a partir de la posición del punto:</h3>";
echo "<h4>Extraer un fragmento del texto desde una posicion. </h4>";
    //                  texto, posicion, nº de caracteres
    $extension = substr($archivo, $extension + 1);//se le suma un caracter de esta manera solo mostramos apartir del punto de la extension.

    echo "$extension <br>";
    echo '<hr>';

echo "<h3>3. Considerar que la extensión puede llegar en mayúsculas o minúsculas o una mezcla de ambas</h3>";
    $extension = strtolower($extension);
    echo $extension;

echo "<h4>Validar extensión (Se permiten archivos de tipo: jpg, png, gif y jpeg)</h4>";

//                            array
    if (!in_array($extension, $extensionesValidas)) {
        echo "Extensión no permitida, solo se pueden: ";
        foreach ($extensionesValidas as $mostrar) {
            echo $mostrar;
            echo ", ";
        }
       
    }else {
        echo "Extensión permitida";

    }



?>