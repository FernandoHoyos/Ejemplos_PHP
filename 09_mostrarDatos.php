<?php 
    //recuperar el comentario escapando los caracteres especiales
    $comentario = $_POST['comentarios'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mostrar Datos</title>
</head>
<body>
    <!--Value normal-->
    <input type="text" value="<?php echo htmlspecialchars($comentario); ?>"><br>
    <!--Value contraido-->
    <input type="text" value="<?=$comentario?>"> //value contraido.
</body>
</html>
