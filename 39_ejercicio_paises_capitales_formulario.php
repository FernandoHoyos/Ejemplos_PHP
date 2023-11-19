<?php
//array de paises-capitales
$paises['Francia']      = 'Paris';
$paises['Ecuador']      = 'Quito';
$paises['Italia']       = 'Roma';
$paises['Alemania']     = 'Berlin';
$paises['Argentina']    = 'Buenos Aires';
$paises['Colombia']     = 'Bogota';

/*Otra forma de hacer este array.
$paises = ['Francia' => 'Paris', ''=> '', '' => '']; */

//Inicializar las variables que intervienen en el formulario.
$pais = $capital = null;

//detectar cuando llega el formulario al servidor
if (isset($_POST['capital'])){
    //recueperar la capital del formulario
    $capital = $_POST['capital'];

    //buscar la capital en el array de paises-capitales
    //                      dato    array
    $pais = array_search($capital, $paises);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Paises y capitales</title>
</head>
<body>

<form action="#" method='post'>
        <select name="capital" onchange="this.form.submit()"><!--onchange, Creo que sube automaticamente el submit-->
            <option disabled selected>Seleccione una capital</option>
            <!--
            <option>París</option>
            <option>Quito</option>
            <option>Roma</option>
            <option>Berlin</option>
            <option>Buenos Aires</option>
            -->
            <!--De esta manera confeccioamos las opciones (foreach) para que salgan si la nececidad de repertir el codigo-->
            <?php
                foreach ($paises as $capi) {
                    /*añadir el atributo selected a la opcion que corresponda
                    con la capital seleccionada.*/
                    if ($capital == $capi){
                    echo "<option selected>$capi</option>";
                    } else{
                        echo "<option>$capi</option>";
                    }
                }
            ?>
        </select>
        <input type="text" disabled value="<?php echo $pais; ?>">
        <!--input type="submit" name='enviar'-->
    </form>
    
</body>
</html>