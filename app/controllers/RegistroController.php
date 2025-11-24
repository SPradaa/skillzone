<?php

require_once "../app/models/CategoriaModel.php";
require_once "../app/models/ZonaModel.php";

class RegistroController{

    public function registro($conn){

        $categoriaModel = new CategoriaModel($conn);
        $categorias = $categoriaModel->obtenerCategorias();

        $zonasModel = new ZonaModel($conn);
        $zonas = $zonasModel->ZonasCompletas();


include("../app/views/registro.php");
    }
}


?>  