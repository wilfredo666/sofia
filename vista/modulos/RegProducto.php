<?php
require_once "modelo/conexion.php";

$CodProducto=trim($_POST["codProducto"]);
$nomProducto=trim($_POST["nomProducto"]);
$marcaProducto=trim($_POST["marcaProducto"]);
$nomProveedorProducto=trim($_POST["nomProveedorProducto"]);
$unidadProducto=trim($_POST["unidadProducto"]);


$stmt=Conexion::conectar()->prepare("insert into IPRODUCTO(COD, NOMBRE, MARCA, PROVEEDOR, UNIDAD) values ('$CodProducto', '$nomProducto', '$marcaProducto', '$nomProveedorProducto', '$unidadProducto')");

$stmt->execute();

echo '<script>
        window.location="VProducto";
      </script>';

?>