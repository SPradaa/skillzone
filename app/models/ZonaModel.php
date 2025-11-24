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
 $contador = $this->conn->prepare("SELECT COUNT(*) FROM provedores WHERE id_zona = :id_zona");
                $contador->execute(['id_zona' => $id_zona]);
             return  $count = $contador->fetchColumn();

        }

        public function ZonasCompletas(){
            $stmt = $this->conn->prepare("SELECT * FROM zonas");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }



    }


?>