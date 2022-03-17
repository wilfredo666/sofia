<?php
require_once "../../modelo/conexion.php";
//recuperando codigo proveedor
$codProveedor=$_GET["codProveedor"];


$stmt=Conexion::conectar()->prepare("delete from PPROV where COD='$codProveedor' ");

$stmt->execute();

?>