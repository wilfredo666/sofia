<?php
require_once "modelo/conexion.php";

//recuperando codigo producto
$codProducto=parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);

$NomProducto=trim($_POST["NomProducto"]);
$MarcaProducto=trim($_POST["MarcaProducto"]);
$NomProveedorProducto=trim($_POST["NomProveedorProducto"]);
$UnidadProducto=trim($_POST["UnidadProducto"]);
$codProSin=trim($_POST["codProSin"]);
//$ProActividad=trim($_POST["ProActividad"]);


$stmt=Conexion::conectar()->prepare("update IPRODUCTO set NOMBRE='$NomProducto', MARCA='$MarcaProducto', PROVEEDOR='$NomProveedorProducto', UNIDAD='$UnidadProducto', CODSIN='$codProSin' where COD='$codProducto'");

$stmt->execute();

echo '<script>
        window.location="VProducto";
      </script>';

?>