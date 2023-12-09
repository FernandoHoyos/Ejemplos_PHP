<?php
require("utilidades/motor_multiidioma.php");//con esta linea incorporamos el motor de multiidioma sin necesidad de escribir todas las lineas en cada pagina
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css"><!--Añadimos el estilo por link-->
<!--STYLE COMENTADO  
    <style>
        main {width: 70%; margin:auto; max-width:1200px}
        header {background-color: lightgreen; margin-bottom: 10px; padding: 5px; text-align: center;}
        nav {padding: 10px; text-align: center; background-color: lightpink; margin-bottom: 10px;}
        a {text-decoration: none; padding: 3px; border: 1px solid grey;}
        section {background-color: lightsalmon; height: 400px; border: 1px solid transparent; margin-bottom:10px; text-align: center;}
        footer {background-color: lightgray; text-align: center; overflow:hidden;}
    </style>
-->
</head>
<body>
    <main>
        <?php require('header.php'); ?>
        <?php require('nav.php'); ?>
        <section>
            <h3><?php echo $section_titulo_2; ?></h3>
            <?php readfile("utilidades/articulo_pagina_2_$idioma.html"); ?><hr><!--Esta linea añade el contenido externo (articulo_pagina_2_...html)-->
        <!--Reemplazado por readfile
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem reprehenderit magni rem qui. Aliquid neque blanditiis hic consectetur saepe molestias aut, praesentium, fugiat ex voluptatem culpa aliquam eius ad aperiam.</p>
            <strong>En esta pagina se añadio el motor de multiidioma con require, linea 1 a 3</strong><br><br>
            <strong>En esta pagina se añadio el motor de multiidioma con javaScrip para traducir el alert del formulario, linea 36 y 37</strong>
            <p>En esta pagina se añadio el style por link, linea 6</p>
        -->
            <form>
                <input type="text" id='nombre' placeholder="<?php echo $placeholder_nombre; ?>"><!--Esta en contenido_es-->
                <input type="button" value="Enviar" onclick="validar()"><!--onclick="validar()" llama a la funcion validar() al presionar sobre el boton enviar-->
            </form>
        </section>
        <?php require('footer.php'); ?>
    </main>
    <script src="utilidades/contenido_<?php echo $idioma; ?>.js"></script><!--Esta linea corrige el inconveniente de la linea siguiente 42-->
    <script src="js/scripts.js"></script><!--El codigo PHP que esta dentro del js no se ejecutara cuando se usa un fichero externo. Esto se soliciona creando una variable en js (contenido_cat.js)-->
</body>
</html>