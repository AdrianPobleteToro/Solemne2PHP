<?php
include 'Connection.php';
include '../modelo/Producto.php';
class CProducto extends Connection{
    
    function __construct() {
        parent::__construct();
    }
    
    public function insertar($producto) {
        //Crea la sentencia/query
        $sentencia = $this->conn->prepare("INSERT INTO producto VALUES(?, ?, ?, ?);");
        
        $id = $producto->getId();
        $nombre = $producto->getNombre();
        $precio = $producto->getPrecio();
        $cantidad = $producto->getCantidad();
        
        //bindea el query con los datos del formulario
        $sentencia->bind_param("isdi", 
                $id, $nombre, $precio, $cantidad);
        
        $sentencia->execute();
    }
    
    public function consultar($id) {
       return null;
    }

    public function consultarTodos() {
        
        $sentencia = $this->conn->prepare("SELECT * FROM producto;");
        
        mysqli_stmt_execute($sentencia);
        
        mysqli_stmt_bind_result($sentencia,$idPro,$nombrePro,$precioPro,$cantidadPro);
        
        
       
        while (mysqli_stmt_fetch($sentencia)) {
            echo '<form class="detalleProd" action="action" method="POST">';
            echo "
                
            <label>ID del producto: {$idPro}</label><br>
            <label>Nombre del producto: {$nombrePro}</label><br>
            <label>Precio del producto: {$precioPro}</label><br>
            <label>Cantidad: {$cantidadPro} en stock</label>";
            
            echo '</form>';
        }
        
        
        
    }
    
    public function eliminar($id) {
        return false;
    }
    
    public function actualizar($id, $obj) {
        return false;
    }
}
/*
$producto = new Producto();
$producto->setId($_POST['idProducto']);
$producto->setNombre($_POST['nombreProducto']);
$producto->setPrecio($_POST['precioProducto']);
$producto->setCantidad($_POST['cantidadProducto']);

$cProducto->insertar($producto);
$cProducto = new CProducto();
header("Location: ../Admin.php");*/