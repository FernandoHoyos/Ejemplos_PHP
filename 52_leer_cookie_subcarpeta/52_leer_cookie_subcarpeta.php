<?php
echo $_COOKIE['inicio'];

/*si necesitamos que la cookie sea visible en todo el dominio 
incluida la carpeta raiz*/
setcookie('52_leer_cookie_subcarpeta', 'Hola desde la subcarpeta', time() + 3600, '/');

?>