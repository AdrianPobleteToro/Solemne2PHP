<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tienda online - Login</title>
        <script src="scripts.js" type="text/javascript"></script>
    </head>
    <body>
        <form action="Control/CUsuario.php" method="post" >
            <input type="text" name="usuario" placeholder="Nombre de usuario" /><br>
            <input type="password" name="passwrd" placeholder="Contraseña" /><br>
            <input type="submit" value="Enviar"/>
        </form>
        
        <button onclick='goTo("index.php")'>Volver al catálogo</button>
    </body>
</html>
