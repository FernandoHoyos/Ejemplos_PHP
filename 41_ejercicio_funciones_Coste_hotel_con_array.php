
<?php
//array con los destinos y los precios
$destinos = ['Madrid' => 150, 'Paris' => 250, 'Los Angeles' => 400, 'Roma' => 200, 'Medellin' => 600];

	//inicializar variables que se utilicen en el formulario
	$noches = $precioTotal = $ciudad = $coche = $error = null;

	//verificar si se ha pulsado el botón de enviar
	if (isset($_POST['enviar'])) {

		/*TRY...CATCH es el ideal para este tipo de validaciones ya que no se hace el efecto flecha 
		haciendo ilegible el codigo. 
		*/
		try{
			//Dentro de un bloque try colocaremos el código a ejecutar (validaciones y código que dependa de las validaciones)
			 
			//PRECIO HOTEL:

			//recuperar el número de noches de hotel
			$noches = $_POST['noches'];

			//llamar a una función para calcular el precio del hotel y recoger el resultado en una variable
			$precioHotel = costeHotel($noches);

			//PRECIO AVIÓN:

			//recuperar la ciudad de destino
			//$ciudad = $_POST['ciudad'];
            $ciudad = $_POST['ciudad'] ?? null;// el operador ?? comprueba la existencia que este detras de el y en el caso de no ejecuta el segundo.

			//llamar a una función para calcular el precio del avión y recoger el resultado en una variable
			$precioAvion = costeAvion($ciudad);

			//crear una variable para calcular el precio total del viaje (precio hotel + precio avión)
			//$precioTotal = $precioHotel + $precioAvion; si solo necesitara estos dos calculos

			//PRECIO ALQUILER COCHE

				//recuperar el numero de dias de alquiler
           		$coche = $_POST['coche'];

				//llamar a una función para calcular el precio del Coche y recoger el resultado en una variable
            	$precioCoche = costeCoche($coche, $noches);//podemos pasarle el valor de la var $noches a 

				//crear una variable para calcular el precio total del viaje (precio hotel + precio avión + precio alquiler coche)
				$precioTotal = $precioHotel + $precioAvion + $precioCoche;

		} catch(Exception $er){ //fuciona como un capturador de EXCEPCIONES.
			//Código a ejecutar en caso que se produzca un error, aparecera en pantalla.
			$error = $er->getCode()." ".$er->getMessage();//ejecutar un metodo de un objeto.
		}
	}

	//FUNCIONES

	//definir la función de cálculo del precio del hotel
	function costeHotel($n) {
		//validar número de noches obligatorio
		if(empty($n)){
			//arrojar una excepción, una excepción es un error.
			throw new Exception("Número de noches debe informarse", 10);//el segundo es un codigo opcional y tiene que ser númerico, para informar de un error y evitar que se imprima uno directo de la DB.
		}
		//validar número de noches númerico
		if (!is_numeric($n)) {
            throw new Exception("Número de noches debe ser numérico", 11);
        }
		//validar número de noches sea mayor o igual a 1
		if ($n < 1) {
			throw new Exception("Número de noches debe ser igual o mayor que 1", 12);
		}
		//Continuacion del codigo del throw, este buscara el ¿catch? mas cercano.
		return $n * 60;
	}

	//definir la función de cálculo del precio del avión:
	function costeAvion($c) {
        global $destinos;//para poder utilizar el array dentro de la funcion

		//validar Ciudad informada debe de existir
		if(empty($c)){
			throw new Exception("Se debe seleccionar una ciudad", 20);
			
			//validar que la ciudad exista en el array, una excepción es un error.
            if (!array_key_exists($c, $destinos)) {
			throw new Exception("La ciudad debe existir", 13);//el segundo es un codigo opcional y tiene que ser númerico, para informar de un error y evitar que se imprima uno directo de la DB.
            }
        }
    
		/*switch ($c) {
			case 'Madrid':
				return 150;
			case 'París':
				return 250;
			case 'Los Angeles':
				return 450;
			case 'Roma':
				return 200;
			default:
				throw new Exception("Ciudad no válida", 13);
		}
        */

        //buscar el precio de la ciudad de destino en el array
        return $destinos[$c];
	}

//definir la función de cálculo del precio de alquiler de coche
	function costeCoche($a) {//podemos pasarle el valor de $noches aqui.
		global $noches; //pasamos el valor de la variable a dentro de la funcion para poder usarla.

		//if (empty($a)) {$a = 0;}

		//validar días de alquiler numérico
		//if ($a == null) {$a = 0;} // si llega sin informar asignar el valor 
		if (!is_numeric($a) && !empty($a)) {
			throw new Exception("Días alquiler coche debe ser númerico", 14);
		}

		//validar dias de alquiler no inferior a 0
		if ((int)$a < 0) {
			throw new Exception("Días alquiler de coche no debe ser inferiror a 0", 15);
		}

		//validar días alquiler si esta informado no puede ser superior a número de noches.
		if ($a > $noches) {//¿como puedo pasar el valor de la variable? con global.
			throw new Exception("Días alquiler de coche no debe ser superior al número de noches", 16);
		}

		//cating (int) para forzar que la variable $a sea numérica en caso que llegue sin informar:
		$precio = (int)$a * 40; //precio total alquiler.
		//$precio = $a * 40; //precio total alquiler

		if ($a >= 7) {
			$precio = $precio - 50; //descuento por siete o más dias
		} elseif ($a >= 3) {
			$precio = $precio - 20; //descuento por tres o más dias
		}

		return $precio;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document with validaciones</title>
	<style type="text/css">
		label {
			width: 150px;
			display: inline-block;
		}
	</style>
</head>
<body>
	<form method="post" action="#">
		<label for="noches">Número de noches:</label>
		<input type="number" name="noches" id="noches" required min="1" value="<?php echo $noches ?>">
		<br><br>
		<label for="ciudad">Destino:</label>
		<select name="ciudad" id="ciudad">
		<!--
				option ?php if ($ciudad == 'Madrid') {echo 'selected'; }?>>Madrid</option>
			<option ?php if ($ciudad == 'París') {echo 'selected'; }?>>París</option>
			<option ?php if ($ciudad == 'Los Angeles') {echo 'selected'; }?>>Los Angeles</option>
			<option ?php if ($ciudad == 'Roma') {echo 'selected'; }?>>Roma</option
		-->
            <option disabled selected>Seleccione un destino</option>
            <!--cofeccionar las opciones de la combo de forma dinamica-->
            <?php
            	foreach ($destinos as $destino => $valor) {
                	if ($destino == $ciudad) {
                 	   echo "<option selected>$destino</option>"; 
                	} else {
                		echo "<option>$destino</option>";
                	}
            	}
            ?>

		</select>
		<br><br>
		<label for="coche">Días alquiler coche:</label>
		<input type="number" name="coche" id="coche" min="0" value="<?php echo $coche ?>">
		<br><br>
		<input type="submit" name="enviar"><br><br>
		<label>Coste total: </label>
		<input type="text" disabled value="<?php echo $precioTotal ?>">
        <br><br>
        <label></label><span><?php echo $error; ?></span>
	</form>