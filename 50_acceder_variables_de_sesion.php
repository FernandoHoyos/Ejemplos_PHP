<?php
    //sirve para compartir datos dentro del mismo dominio como este ejemplo.
    //activar variables de sesion.
    session_start();

    echo '<pre>';
    print_r($_SESSION['personas']);
    echo '</pre>';

    //CRUD: Create Read Update Delete

?>