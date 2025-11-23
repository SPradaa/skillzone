<?php
require_once "../app/models/CategoriaModel.php";
require_once "../app/models/ZonaModel.php";
require_once "../app/models/ProvedorModel.php";

class HomeController
{



    public function index()
    {
        // Conexion a la base de datos
        $db = new Database();
        $conn = $db->conectar();

        // estos son los modelos, hay que cargarlos y pasarles la varible de conexion del archivo database
        $categoriaModel = new CategoriaModel($conn);
        $zonaModel = new ZonaModel($conn);
        $provedorModel = new ProvedorModel($conn);

        //Obtener los datos 
$categorias  = $categoriaModel->obtenerCategorias();
$zonas = $zonaModel->obtenerZonas();
$provedor = $provedorModel->ObtenerProvedores();



        include('../app/views/home.php');
    }
}
