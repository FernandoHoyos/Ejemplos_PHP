<?php 

    /*consultar el array SERVER
        echo '<pre>';
        //print_r($_SERVER);
        //print_r($_SERVER['HTTP_ACCEPT_LANGUAGE']);
        print_r(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));//Saber el idioma del navegador este caso (es).
        echo '</pre>';
    */

    //array con los idiomas permitidos
    $idiomasValidos = ['es', 'ca'];

    /*incorporar el archivo externo con las variables del contenido de la pagina en castellano o catan de pendiendo del parametro idioma idioma que llega en la URL.
    require("utilidades/contenido_es.php");*/

    //recuperar el idioma del navegador para utilizarlo como por defecto
    $idiomaNavegador =substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

    //recuperar el idioma de la URL si no llega el parámetro idioma seleccionamos el idioma de la cookie, si esta tampoco existe seleccionamos el del navegador y en último caso seleccionamos uno fijo por defecto (uno por ?? ... ?? defecto).
    //$idioma = $_GET['idioma'] ?? 'ca';
    $idioma = $_GET['idioma'] ?? $_COOKIE['idioma'] ?? $idiomaNavegador ?? 'es';


    //validar que el idioma asignado encuentre dentro del array de idiomas permitidos
    if (!in_array($idioma, $idiomasValidos)) {
        //opcion 1: asignar un idioma por defecto
        //$idioma = 'ca';
        //opcion 2: recargar la pagina con el idioma por defecto
        header("location: ?idioma=ca");
    }

    //guardar el idioma seleccionado por el usuario en una cookie para utilizarlo como idioma por defecto en posteriores conexioes
      setcookie('idioma', $idioma, time() + 3600 * 24 * 365);

    //incorporar el archivo externo con las variables del 
      require("utilidades/contenido_$idioma.php");
?>