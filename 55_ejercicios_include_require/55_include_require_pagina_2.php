<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>require</title>
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
    <!--<header> USAMOS REQUIRE PARA MOSTRARLO AQUI DESDE AFURA
            <h3>Título de la página</h3>
        </header>
        <nav>
            <a href='55_include_require_pagina_1.php'>Página 1</a>
            <a href='55_include_require_pagina_2.php'>Página 2</a>
        </nav>
    -->
        <?php require('55_1_header.html');?>
        <?php require('55_2_nav.html');?>
        <section>
            <h3>Sección de contenido 2</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Blanditiis fugiat tempora omnis iure nobis saepe, 
                aspernatur libero neque, quasi assumenda quidem nihil tempore molestiae. 
                Necessitatibus dolor voluptas facilis consequatur ipsam!</p>
        </section>
    <!--
        <footer>
            <p>Pié de página</p>
        </footer>
    -->
    <?php require('55_3_footer.html');?>
    </main>
</body>
</html>