<?php
    require("utilidades/motor_multiidioma.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <main>
        <?php require('header.php'); ?>
        <?php require('nav.php'); ?>
        <section>
            <h3><?php echo $section_titulo; ?></h3>
            <img src="https://picsum.photos/400/300" alt="<?php echo $section_imagen; ?>">
        </section>
        <?php require('footer.php'); ?>
    </main>
</body>
</html>