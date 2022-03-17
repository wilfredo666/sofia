<?php
require_once "../../modelo/conexion.php";
//recuperando codigo cliente
$codCliente=$_GET["codCliente"];


$stmt=Conexion::conectar()->prepare("delete from LCLI where COD='$codCliente' ");

$stmt->execute();

?>