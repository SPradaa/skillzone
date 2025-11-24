<?php
require_once("../config/conexion.php");

require_once("../app/controllers/HomeController.php");
require_once("../app/controllers/RegistroController.php");
$db = new Database();
$conn = $db->conectar();

$ruta = isset($_GET['ruta']) ? $_GET['ruta'] : 'home';

switch($ruta){
    case 'home':
        $controller = new HomeController();
        $controller->index($conn);
        break;
    
    case 'registro':
        $controller = new RegistroController();
        $controller->registro($conn);
        break;
    

}

?>