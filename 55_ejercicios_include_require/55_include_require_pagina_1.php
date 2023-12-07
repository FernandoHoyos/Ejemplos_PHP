<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>include</title>
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
            <h2><strong> En esta pagina 1 usamos include o require:</strong></h2>
            <p>require producirá un error fatal (E_COMPILE_ERROR) y detendrá el script</p>
            <p>include solo producirá una advertencia (E_WARNING) y el script continuará</p>
            </p>
        </header>
        <nav>
            <a href='55_include_require_pagina_1.php'>Página 1</a>
            <a href='55_include_require_pagina_2.php'>Página 2</a>
        </nav>
        <section>
            <h3>Sección de contenido</h3>
            <img src="https://picsum.photos/400/300" alt="">
        </section>
        <footer>
            <p>Pié de página</p>
        </footer>
    </main>
</body>
</html>