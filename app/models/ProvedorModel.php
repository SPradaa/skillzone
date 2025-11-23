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

}


?>