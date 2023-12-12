<?php
//EJERCICIO 51 EDITADO EN ESTE EJEMPLO PARA GUARDAR EN UN FICHERO.

	//activar las variables de sesion
	session_start(); 

	//Mostrar las personas guardadas en la variable de sesion
	//print_r($_SESSION['personas']);
	
	/*En vez de trabajar con la variabe de sesion en todo el ejercicio, 
	vamos a guardar su contenido en una variable no permanente que informaremos 
	al inicio del programa. Para evitar el Warning: Undefined array key*/
	$personas = $_SESSION['personas'] ?? [];// haremos una asignacion condicionada (?? []) para que no nosde el warning de mientras.

	/*$personas = json_decode(file_get_contents('ficheros/personas.json'), true) ?? [];// esta linea hay que modificarla porque por defecto es false y crea un objeto hay que dejarlo en true para que sea array, la primera vez que se ejecita al no estar creado el array mostrara un warning y para solucionar esto usaremos un if linea 15*/
	
	//comprobar si el fichero existe:
	if (file_exists('ficheros/personas.json')) {
		$personas = json_decode(file_get_contents('ficheros/personas.json'), true);
	}else{
		$personas = [];
	}
	
	
	//inicializar las variables que se utilicen en el documento HTML
	$mensajes = null;
	
	//OPERATIVA DE ALTA, CONSULTA, BAJA Y MODIFICACION

	//1.- Operativa de alta de personas

	//Comprobar si llega el formulario de alta
	if (isset($_POST['alta'])) {
	
		//Recuperar los datos del formulario
		$nif = trim($_POST['nif']); //trim elimina los espacios en blanco al principio y al final
		$nombre = trim($_POST['nombre']);
		$direccion = $_POST['direccion'];

		//podemos sanear los textos utilizando preg_replace(), sanear es todo lo que no quiere que aprezca

		//echo "$nif $nombre $direccion"; //esto es tan solo para ir comprobando de que la cosa va funcionando bien.

		//Validar los datos:
		try {
			//validar los datos (todos son obligatorios)
			if (empty($nif)) {
				throw new Exception("Nif obligatorio", 10);	
			}
			if (empty($nombre)) {
				throw new Exception("Nombre obligatorio", 11);
			}
			if (empty($direccion)){
				throw new Exception("Direccion obligatoria", 12);
			}

			//validar que el nif no se encuntre como clave de alguna fila
			if(array_key_exists($nif, $personas)){
				throw new Exception("El NIF ya se encuentra asociado a otra persona", 13);
				
			}

			//añadir la persona al array $personas
			$personas[$nif]['nombre'] = $nombre; //La variable $personas hay que conservarla ya que cada vez que añada una nueva persona solo guardaria la ultima.
			$personas[$nif]['direccion'] = $direccion;// Se tiene que escribir el codigo al final del programa para trasladar el contenido al array }

			//mostrar un mensaje de alta efectuada
			$mensajes = 'Alta de personas efectuada';

			//Limpiar el formulario para que aparezca limpio despues de cada alta.
			$nif = $nombre = $direccion = null;

		} catch (Exception $error) {
			//Tratamiento de las excepciones (errores)
			$mensajes = $error->getCode() . ' ' . 
			$error->getMessage();//el signo -> es ejecutar un metodo de un odjeto a diferencia de la asignacion =>
		}
	}
	//Baja Personas/Personas el boton baja para un usuario se programa en el formulario linea 167 en el foreach.
	//2.- Baja de todas las personas. esta siempre tiene que ir antes de la consulta
	if (isset($_POST['baja'])) {
		//vaciar el array
		$personas = []; 
	}
	//3. Baja de la persona seleccionada
	if (isset($_POST['bajapersona'])) {
		//recuperar el nif de la persona a dar de baja, Hay que tener cuodado con las variables que no se sobre escriban
		$nifbaja = $_POST['nifbaja'];
		//print_r($_POST);//con esta linea podemos ver para comprobar que llega del metodo POST

		try {
			//validar que el nif llega informado
			if (empty($nifbaja)) {
				throw new Exception("Debe sellecionar una persona", 20);
			}

			//validar que el nif existe en el array
			if (!array_key_exists($nifbaja, $personas)) {
				throw new Exception("El nif a dar de baja no existe", 21);
				
			}

			// borra la fila del array
			unset($personas[$nifbaja]);

		} catch (Exception $error) {
			$mensajes = "{$error->getCode()}{$error->getMessage()}";
		}
	}

	//4. Modificacion de la persona
	
		if (isset($_POST['modificar'])) {
	
		//Recuperar los datos del formulario oculto
		$nifmodi = trim($_POST['nifModi']); //trim elimina los espacios en blanco al principio y al final
		//$nombremodi = trim($_POST['nombreModi']);
		$nombremodi = trim(filter_input(INPUT_POST,'nombreModi', FILTER_SANITIZE_SPECIAL_CHARS,FILTER_FLAG_STRIP_HIGH));//Prueba; en vez de utilizar $_post utilizamos filter_input a este se le puede añadir mas parametros
		$direccionmodi = trim($_POST['direccionModi']);

		//podemos sanear los textos utilizando preg_replace(), sanear es todo lo que no quiere que aprezca

		//echo "$nif $nombre $direccion"; //esto es tan solo para ir comprobando de que la cosa va funcionando bien.

		//Validar los datos:
		//Este try lo podriamos añadirlo a una funcion para evitar repetir cdigo dentro del programa.
		try {
			//validar los datos (todos son obligatorios)
			if (empty($nifmodi)) {
				throw new Exception("Nif obligatorio", 10);	
			}
			if (empty($nombremodi)) {
				throw new Exception("Nombre obligatorio", 11);
			}
			if (empty($direccionmodi)){
				throw new Exception("Direccion obligatoria", 12);
			}

			//validar que el nif se encuntre como clave de alguna fila
			if(!array_key_exists($nifmodi, $personas)){
				throw new Exception("El NIF no se encuentra", 13);
				
			}

			//modificar la persona en el array $personas
			$personas[$nifmodi]['nombre'] = $nombremodi; //La variable $personas hay que conservarla ya que cada vez que añada una nueva persona solo guardaria la ultima.
			$personas[$nifmodi]['direccion'] = $direccionmodi;// Se tiene que escribir el codigo al final del programa para trasladar el contenido al array }

			//mostrar un mensaje de modificacion efectuada
			$mensajes = 'Modificacion de persona efectuada';

		} catch (Exception $error) {
			//Tratamiento de las excepciones (errores)
			$mensajes = $error->getCode() . ' ' . 
			$error->getMessage();//el signo -> es ejecutar un metodo de un odjeto a diferencia de la asignacion =>
		}
	}
	

	//5. Consulta de todas las personas del array
	$filasTabla = '';

	//Ordenar las filas por nif
	//ksort($personas);

	//Ordenar las filas por nombre
	asort($personas);

	//Ordenar la segunda columna (direccion) pasos 1. y 2.; en el caso de que desee hacerlo por columnas:

	//1. extraer en un array la columna a ordenar (direccion).
	$direcciones = array_column($personas, 'direccion');


	//2. ordenar el array de direcciones y el array principal con el mismo criterio
	array_multisort($direcciones, $personas);

	foreach ($personas as $nifTabla => $datosPersonas) {
		$filasTabla .= "<tr>";
		$filasTabla .= "<td class='nif'>$nifTabla</td>";
		$filasTabla .= "<td class='nombre'>$datosPersonas[nombre]</td>"; //sepone sin comillas la clave asociativa ([nombre]) arrays porque si se hace dentro de las comillas dobles lo interpretara como un apostrofe.
	  //$filasTabla .= "<td>{$datosPersonas['nombre']}</td>"; // Si desea añadir las comillas es necesario añadir las llaves ({$datosPersonas['nombre']}) de apertura y cierre
	  //$filasTabla .= "<td contenteditable>$datosPersonas[direccion]</td>";//contenteditable no es aconsejable porque el usuario no sabria identificarlo.
		$filasTabla .= "<td>";
		$filasTabla .= "<input type='text' value='{$datosPersonas['direccion']}' class='direccion'>";//esta es otra manera de hacerlo en vez de contenteditable
		$filasTabla .= "</td>";
	  //Este es el formulario para la baja de la persona
		$filasTabla .= "<td>";
		$filasTabla .= "<form method='post' action='#'>";
		$filasTabla .= "<input type='hidden' name='nifbaja' value='$nifTabla'>";//El input hidden es en donde almacenamos el dato que vamos a enviar al servidor para ejecutar algun tipo de accion en este caso dar de baja a un usuairo.
		$filasTabla .= "<input type='submit' value='Baja' name='bajapersona' value='$nifTabla'>";
		$filasTabla .= "</form>";
	  //Botón para la modificacion de la persona
		$filasTabla .= "&nbsp;&nbsp;<input type='button' value='modificar' onclick='enviarModificacion(this)'>";//Estos (&nbsp;&nbsp)carateres son espacios en blanco 
		$filasTabla .= "</td>";
		$filasTabla .= "</tr>";
	}

	
	//Trasladar el contenido del array $personas a la variable de sesion, para capturar los datos a dar de alta antes que se pierdan.
	//$_SESSION['personas'] = $personas;

	//Trasladar el contenido del array $personas a un fichero linea 13 y 194
	file_put_contents('fichero/personas.json', json_encode($personas));



?>
<html>
<head>
	<title></title>
	<meta charset='UTF-8'>
	<link rel="stylesheet" type="text/css" href="51_ejercicio_sesion_arrays/ejercicio_sesion_arrays/css/estilos.css">
</head>
<body>
	<div class='wraper'>
		<form method='post' action='#'>
			<label>NIF</label>
			<input type='text' name='nif' value="<?php echo $nif ?? null ?>"><br>
			<label>Nombre</label>
			<input type='text' name='nombre' value="<?php echo $nombre ?? null ?>"><br>
			<label>Dirección</label>
			<input type='text' name="direccion" value="<?php echo $direccion ?? null ?>"><br>
			<input type='submit' name='alta' value='alta persona'>
			<span><?php echo $mensajes;?></span>
		</form>
		<br><br>
		<table>
			<tr><th>NIF</th><th>Nombre</th><th>Dirección</th><th></th></tr>
			<?php
			//Si se desea se podria haber puesto aqui lo del punto 2. linea 166. COMPORBAR QUE SEA LA LINEA QUE INDICO
			echo $filasTabla;
			?>
		</table>
		<br>
		<form method='post' action='#' id='formularioBaja'><!--El id es un identificador que agiliza la busqueda dentro de la DB-->
			<input type='hidden' name='baja'></input><!--Un input hidden es un input no visible para el usuario, y sirve para guardar informacion que se enviara al servidor, como por ejemplo cuando se asocia un id a una fila de datos-->
			<input type='button' value='baja personas' id='baja' onclick="confirmarBaja()"><!--Esto se programa en el punto 2.- linea 68--><!--onclick es un evento de JavaScript, fichero externo-->
		</form>
		<!--FORMULARIO OCULTO PARA LA MODIFICACION--><!--Esta programacion se hace con JavaScript (foreach linea 167)-->
		<form method='post' action='#' id='formularioModi'><!--Con estos ids nos ayuda a enviar la informacion recogida en los hidden al formulario oculto-->
			<input type='hidden' name='nifModi' id='nif'>
			<input type='hidden' name='nombreModi' id='nombre'>
			<input type='hidden' name="direccionModi" id='direccion'>
			<input type='hidden' name='modificar'>
		</form>
	</div>
	<script type="text/javascript" src='51_ejercicio_sesion_arrays/ejercicio_sesion_arrays/js/scripts.js'></script>
</body>
</html>

<?php
echo '<pre>';
print_r($personas);
echo '</pre>';
echo "<p>Array del ejercicio 49 en donde se almacenara TMP los datos a no contar con una DB</p>";
?>