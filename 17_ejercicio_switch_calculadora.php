<?php 
    //1. inicializar las variables que usemos dentro del documento html
    $resultado = $num1 = $num2 = null;
    $oper = '+';

    //2. verificar que se ha pulsado el botón calcular (nos llegará el atrtibuto name 'calcular)
    if (isset($_POST['calcular'])) {
        //2.1 recuperar datos del formulario (numero1, operacion y numero2)
        $num1 = $_POST['numero1'];
        $num2 = $_POST['numero2'];
        $oper = $_POST['operacion'];

        //2.2 evaluar la operación para realizar la operación aritmética correspondiente
        switch ($oper) {
            case '+':
                $resultado = $num1 + $num2;
                break;
            case '-':
                $resultado = $num1 - $num2;
                break;
            case 'x':
                $resultado = $num1 * $num2;
                break;
            case '/':
                $resultado = $num1 / $num2;
                break;
            default:
                $resutado = 'Operación no válida';
        }
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>
    <form action="#" method="post">
        <input type="number" required name="numero1" value="<?php echo $num1 ?>">
        <select name="operacion">
            <option <?php if ($oper == '+') {echo 'selected';} ?>>+</option>
            <option <?php if ($oper == '-') {echo 'selected';} ?>>-</option>
            <option <?php if ($oper == 'x') {echo 'selected';} ?>>x</option>
            <option <?php if ($oper == '/') {echo 'selected';} ?>>/</option>
        </select>
        <input type="number" required name="numero2" value="<?php echo $num2 ?>">
        <input type="submit" value="Calcular" name="calcular">
        <input type="text" disabled value="<?php echo $resultado ?>">
    </form>
</body>
</html>