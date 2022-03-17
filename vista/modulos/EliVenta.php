<?php
require_once "../../modelo/conexion.php";
//recuperando codigo venta
$codVenta=$_GET["codVenta"];


$stmt=Conexion::conectar()->prepare("delete from  where COD='$codVenta' ");

$stmt->execute();

?>