<?php 

class ZonaModel{
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function ObtenerZonas(){
            $stmt = $this->conn->prepare("SELECT * FROM zonas LIMIT 6");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function ContarProvedores($id_zona){
            $stmt = $this->conn->prepare("SELECT * FROM provedores WHERE id_zona = :id_zona");
            $stmt->execute(['id-zona' =>$id_zona]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }




    }


?>