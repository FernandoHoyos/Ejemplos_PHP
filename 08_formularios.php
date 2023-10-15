<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
    <form method="get" action="08_procesaFormulario.php">  
        <input type="text" name="nombre" placeholder="nombre" required>  
        <input type="number" name="edad" placeholder="edad" required min='0' max='120'>  
        <input type="tel" name="telefono" placeholder="telefono" required>
        <input type='password' name='password' placeholder="password" required>
        <br><br>  
        <input type="submit" value='Enviar submit'>  
        <input type="button" value='Enviar button'> 
    </form>
</body>
</html>
