<?php
require_once "../../controlador/clienteControlador.php";
require_once "../../modelo/clienteModelo.php";
$nit=$_GET["nit"];

$cliente=controladorCliente::ctrInfoCliente($codCliente);

?>