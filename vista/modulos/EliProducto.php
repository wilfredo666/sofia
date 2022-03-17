<?php
require_once "../../modelo/conexion.php";
//recuperando codigo producto
$codProducto=$_GET["codProducto"];


$stmt=Conexion::conectar()->prepare("delete from IPRODUCTO where COD='$codProducto' ");

$stmt->execute();

?>