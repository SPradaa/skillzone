<?php

class CategoriaModel{
    private $conn;

    public function __construct($conn){
        $this->conn = $conn;

    }
    public function ObtenerCategorias(){
        $stmt = $this->conn->prepare("SELECT * FROM categorias");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

}
?>