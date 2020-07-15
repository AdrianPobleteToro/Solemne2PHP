<?php
include 'Connection.php';
class CUsuario extends Connection{

    function __construct() {
        parent::__construct();
    }
    
    public function insertar($obj) {
        return false;
    }

    public function consultarUsuario($usuario,$passwrd) {
        
        $sentencia = $this->conn->prepare("SELECT * FROM Cliente where nombre = '.$usuario.' and pass = '.$passwrd.';");
        
        mysqli_stmt_execute($sentencia);
        
        mysqli_stmt_bind_result($sentencia,$nombre,$pass);
        
       }

    public function consultarTodos() {
        return null;
    }

    public function eliminar($id) {
        return false;
    }
    
    public function actualizar($id, $obj) {
     return null;   
    }
}
