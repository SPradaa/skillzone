<?php

class ProvedorModel{
    private $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }

    function ObtenerProvedores(){
        $stmt = $this->conn->prepare("SELECT * FROM provedores LIMIT 6");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function ObtenerCategoriaProveedores($id_categoria){
        $stmt = $this->conn->prepare("SELECT * FROM categorias WHERE id_categoria = :id_categoria");
        $stmt->execute(['id_categoria' => $id_categoria]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}


?>