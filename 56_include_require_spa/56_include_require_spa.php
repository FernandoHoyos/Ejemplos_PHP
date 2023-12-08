<?php
    //array con todas las secciones válidas
    $seccionesValidas = ['1', '2']; //para evitar que la pagina no carge al ser manipulada por algun usuairo cambiandole el numero de la pagina y esta no exista dentro del web usamos este array

    //recuperar la seccion a incorporar en la pagina a partir del parametro que nos llegara por la URL (metodfo GET)
    $seccion = $_GET['seccion'] ?? 1;//se le asigna este segundo valor ?? 1 en el caso de que no llegue la url o pgina 1
    
    //validar que la seccion a mostrar sea una de las paginas validas de la web creada, aqui usamos el array
    if (!in_array($seccion, $seccionesValidas)) {
        //$seccion = 1;
        //recargar la pagina con la seccion por defecto en el caso de que la ubiese modificado el usuario
        header("Location: ?seccio=1");

    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>spa</title>
    <style>
        main {width: 70%; margin:auto; max-width:1200px}
        header {background-color: lightgreen; margin-bottom: 10px; padding: 5px; text-align: center;}
        nav {padding: 10px; text-align: center; background-color: lightpink; margin-bottom: 10px;}
        a {text-decoration: none; padding: 3px; border: 1px solid grey;}
        section {background-color: lightsalmon; height: 400px; border: 1px solid transparent; margin-bottom:10px; text-align: center;}
        footer {background-color: lightgray; text-align: center; overflow:hidden;}
    </style>
</head>
<body>
    <main>
        <header>
            <h3>Título de la página</h3>
            <h2>Aqui en esta pagina usamos el spa</h2>
        </header>
        <nav>
            <a href='56_include_require_spa.php?seccion=1'>Página 1</a><!--?seccion=1 se usa para pasar un parametro a la URL, si desea pasar mas se añadiria el ampersan & al final php?seccion=1&-->
            <!--<a href='56_include_require_spa.php?seccion=2'>Página 2</a>, la cambiamos por la linea 40-->
            <a href='?seccion=2'>Página 2</a><!--En el caso de que se desee recortar el nombre de la URL de la pagina 2 basta con ?seccion=2 en este caso-->
        </nav>
        <?php require("56_seccion_$seccion.html");?>
        <footer>
            <p>Pié de página</p>
        </footer>
    </main>
</body>
</html>