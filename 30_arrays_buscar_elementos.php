<?php 
    echo "<p>¿Como buscar elementos en un array?.</p>";
    //array inical
    $colores = ["azul", "verde", "rojo", "amarillo", "negro"];

    echo "<pre>";
    print_r($colores);
    echo "</pre>";

    echo "<p>Buscar elementos a un array y obtener su indice:</p>";

    $indice = array_search("verde", $colores);

    echo $indice;
    echo '<hr>';

    //buscar un elemento en el array y obtener su índice (Sí el elemento no existe se asignara el valor false a la variable $indice);

    $indice = array_search("blanco", $colores);

    echo $indice;
    echo "<hr>";

    //Buscar un elemento en el array (in_array) solo para saber si existe o no existe el valor, si no existe lo añadimos;
    
    $colorbuscar = "blanco";
//                'blaco'
    if (in_array($colorbuscar, $colores)) {
        echo "El color existe";
    } else {
        echo "El color no existe";
        //añadir el color al array
        array_push($colores, $colorbuscar);
    }
    echo "<pre>";
    print_r($colores);
    echo "</pre>";

    echo "<p>//Buscar un elemento en el array (array_search) y, si existe, borrarlo (array_splice):</p>";
   
    //1. bucar el elemento y obtener su indice, este busca el valor false.
    $indice = array_search("azul", $colores);
    echo "$indice<br>";

    //2. borrar el elemento si existe
    //array_splice($colores, 1, 1);

    //Para evitar que no se borre el primer elemento del array en caso de que el valor a buscar no exista.
    //Ojo los errores de logica son muy dificiles de descubrir, pero pueden ser faciles de corregir.
    if ($indice !== false) { //la expresion 0, null, false se evaluan igual, esto trae errores, para evitarlos usamos la triple validacion === ó !==.
        array_splice($colores, $indice, 1);
    } 
    echo "<pre>";
    print_r($colores);
    echo "</pre>";

?>