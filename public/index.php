<?php 
require_once("../config/conexion.php");
require_once('../app/controllers/HomeController.php');
$db = new Database();
$conn  = $db->conectar();

$controller = new HomeController();
$controller->index($conn);
?>