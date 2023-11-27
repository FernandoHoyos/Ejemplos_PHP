<?php
    $personas = [
        //100A y 200B son las claves, podria ser cualquier valor unico que pueda identificar a la persona.
        '100A' => [
            'nombre' => 'Arch Stanton',
            'direccion' => 'Av Cementerio, 56',
            'poblacion' => 'Sad Hill'
        ],
        '200B' => [
            'nombre' => 'Connie Corleone',
            'direccion' => 'Av Solozzb, 12',
            'poblacion' => 'New York City'
        ]
    ];
    echo '<pre>';
    print_r($personas);
    echo '</pre>';

    //acceder a una fila del array
    print_r($personas['200B']);

    echo '<br>';

    //acceder al dato de una columna del array
    echo $personas['200B']['nombre'];

    echo '<hr>';

    /*recorrer o mostrar en pantalla los valores del array
    deforma completa que muestra todos las personas*/
    //         array      clave    dato
    foreach ($personas as $nif => $datosPersona) {
        echo "<br>$nif";
        echo "<br>";
        print_r($datosPersona);
        echo "<br>";
        //mostrar de forma individual cada uno de los datos de la persona (cada fila del array principal)
        foreach ($datosPersona as $clave => $dato) {
            echo "$clave: $dato<br>";
        }
    }
    echo '<hr>';

    //modificar la direccion de la persona con nif 200B
    //Si la clave de fila no existe se creará una fina nueva
    //Si la clave de columna no existe se creará una columna nueva
    $personas['200B']['direccion'] = 'Av siempre viva 36';

    echo '<pre>';
    print_r($personas);
    echo '</pre>';

    //borrar la persona con nif 100A
    unset($personas['100A']);

    echo '<pre>';
    print_r($personas);
    echo '</pre>';

    echo '<hr>';
?>

<h2>Ejemplo array asociativo asociativo:</h2>

<?php
$productos = 
            array(	
                'Bolígrafo Azul'    => array(
		            'marca'         => "Bic",
		            'precio'        => "0.75€",
		            'referencia'    => "552BIC12"
	            ),
	
	            'Pegamento'       => array(
		            'marca'       => "Pritt",
		            'precio'      => "1.75€",
		            'referencia'  => "567PRI13"
                ),

                'Atributo'  => array(
                'dato 1'    => "Contenido del dato 1",
                'dato 2'    => "Contenido del dato 2",
                'dato 3'    => "Contenido del dato 3"
                )
            );
 
foreach($productos as $producto => $detalles)
    {
	    echo "<h3> $producto </h3>";
 
        foreach($detalles as $indice => $valor)
	        {
		         echo "<p> $indice: $valor </p>";
	        }
    }
?>