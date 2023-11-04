<?php
	//inicializar variables que se utilicen en el formulario
	$noches = $precioTotal = $ciudad = $coche = null;

	//verificar si se ha pulsado el botón de enviar
	if (isset($_POST['enviar'])) {
		
//PRECIO HOTEL:
		//recuperar el número de noches de hotel
		$noches = $_POST['noches'];

		//llamar a una función para calcular el precio del hotel y recoger el resultado en una variable
		$precioHotel = costeHotel($noches);

//PRECIO AVIÓN:

		//recuperar la ciudad de destino
		$ciudad = $_POST['ciudad'];

		//llamar a una función para calcular el precio del avión y recoger el resultado en una variable
		$precioAvion = costeAvion($ciudad);

		//PRECIO ALQUILER COCHE

		//recuperar el numero de dias de alquiler
		$coche = $_POST['coche'];

		//llamar a una función para calcular el precio del Coche y recoger el resultado en una variable
		$precioCoche = costeCoche($coche);

		//crear una variable para calcular el precio total del viaje (precio hotel + precio avión)
		$precioTotal = $precioHotel + $precioAvion + $precioCoche;
	}

//FUNCIONES

	//definir la función de cálculo del precio del hotel
	function costeHotel($n) {
		return $n * 60;
	}

	//definir la función de cálculo del precio del avión:
	function costeAvion($c) {
		switch ($c) {
			case 'Madrid':
				return 150;
			case 'París':
				return 250;
			case 'Los Angeles':
				return 450;
			case 'Roma':
				return 200;
		}
	}

	//definir la función de cálculo del precio de alquiler de coche
	function costeCoche($a) {
		$precio = $a * 40; //precio total alquiler

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
	<title>Documento sin validaciones</title>
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
		<input type="number" name="noches" id="noches" value="<?php echo $noches ?>">
		<br><br>
		<label for="ciudad">Destino:</label>
		<select name="ciudad" id="ciudad">
			<option <?php if ($ciudad == 'Madrid') {echo 'selected'; }?>>Madrid</option>
			<option <?php if ($ciudad == 'París') {echo 'selected'; }?>>París</option>
			<option <?php if ($ciudad == 'Los Angeles') {echo 'selected'; }?>>Los Angeles</option>
			<option <?php if ($ciudad == 'Roma') {echo 'selected'; }?>>Roma</option>
		</select>
		<br><br>
		<label for="coche">Días alquiler coche:</label>
		<input type="number" name="coche" id="coche" value="<?php echo $coche ?>">
		<br><br>
		<input type="submit" name="enviar"><br><br>
		<label>Coste total: </label>
		<input type="text" disabled value="<?php echo $precioTotal ?>">
	</form>
</body>
</html>