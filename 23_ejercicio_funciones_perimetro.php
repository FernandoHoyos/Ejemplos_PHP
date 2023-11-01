<?php 
    //inicializar las variables que utilicemos en el documento html
    $perimetro = null;
    $ancho = $alto = 1;//$ancho = $alto = '';

    //comprobar si llega el atributo name del botón de submit (atributo name calcular)
    if (isset($_POST['calcular'])) {
        //recuperar el numero del formulario (ancho y alto)
        $ancho = $_POST['ancho'];
        $alto = $_POST['alto'];

        //validar que ancho y alto llegue informados como numerico.
        //if (is_numeric($ancho) && is_numeric($alto)) {
            // llamar a la función que calcula el perimetro y recoger el resultado (RETURN) en una variable.
            $perimetro = perimetro($ancho, $alto);
        //}
        
    }

    //definir la funcion de cálculo de perimetro.
        function perimetro($ancho, $alto)
        {
            $resultado = $ancho * 2 + $alto * 2;
            return $resultado;
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resultado Perimetro</title>
    <style>
        div {
                background-color: blue;
                width: <?php echo $ancho."px"?>; /*hay que concatenar la unidad de medida en este caso Pixeles*/
                height: <?php echo $alto."px"?>; /*En CSS no se tiene que dejar espacios en blanco con las unidades */
            }
    </style>
</head>
<body>
    <form action="#" method='post'>
        <label>ancho</label><input type='number' name='ancho' value="<?php echo $ancho?>">
        <label>alto</label><input type='number' name='alto'value="<?php echo $alto?>">
        <input type='submit' name='calcular' value='Calcular'>
        <input type="text" disabled value="<?php echo "$perimetro" ?>">
    </form>
    <p>El perímetro es: = <?php echo "$perimetro" ?></p>
    <div class="box"><div>
</body>
</html>
