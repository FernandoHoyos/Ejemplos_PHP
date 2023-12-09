<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
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
        <?php require('header.html'); ?>
        <?php require('nav.html'); ?>
        <section>
            <h3>Sección de contenido 2</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem reprehenderit magni rem qui. Aliquid neque blanditiis hic consectetur saepe molestias aut, praesentium, fugiat ex voluptatem culpa aliquam eius ad aperiam.</p>
        </section>
        <?php require('footer.html'); ?>
    </main>
</body>
</html>