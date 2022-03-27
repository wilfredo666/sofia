<?php
require_once "../../controlador/clienteControlador.php";
require_once "../../modelo/clienteModelo.php";
$txtBus=$_GET["txtBus"];

$cliente=controladorCliente::ctrInfoCliente($txtBus);

echo json_encode($cliente);
?>