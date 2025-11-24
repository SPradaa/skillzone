<?php

class UsuariosModel{
    private $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }

    function RegistrarUsuarios(){
            $stmt = $this->conn->prepare("INSERT INTO usuarios() VALUES()");
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }

        function RegistrarProveedor(){
            $stmt = $this->conn->prepare("INSERT INTO proveedores() VALUES()");
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }

    
}

?>