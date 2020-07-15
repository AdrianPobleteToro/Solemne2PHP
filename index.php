<!DOCTYPE html>
<?php
include_once 'Control/CProducto.php';
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tienda online</title>
        <link href="estilos.css" rel="stylesheet" type="text/css"/>
        <script src="scripts.js" type="text/javascript"></script>
    </head>
    <body>
        
        <h1>Tienda</h1>
        
        <nav>
            <a  href="Ingreso.php")><b>Ingresar Como Admin | </b></a>
            <a  href="#")><b>Ir al carrito de compras | </b></a>
            <a  href="#")><b>Buscar Producto por ID</b> | </a>
        </nav>
        
        <button onclick='goTo("Ingreso.php")'>Iniciar sesión</button>
        
        <div id="wrapper">
            <h2>Productos Disponibles</h2> <br>
        
        <?php
         $cProducto = new CProducto();
         
         $cProducto->consultarTodos();
        ?>
        </div>
    </body>
</html>
