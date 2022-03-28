<?php
require_once "../../controlador/productoControlador.php";
require_once "../../modelo/productoModelo.php";
$txtBus=$_GET["txtBus"];

$producto=controladorProducto::ctrInfoProducto($txtBus);

echo json_encode($producto);
?>