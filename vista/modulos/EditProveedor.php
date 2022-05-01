<?php
require_once "modelo/conexion.php";

//recuperando codigo proveedor
$codProveedor=parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);

$nitProveedor=trim($_POST["nitProveedor"]);
$razonProveedor=trim($_POST["razonProveedor"]);
$nomProveedor=trim($_POST["nomProveedor"]);
$apProveedor=trim($_POST["apProveedor"]);
$dirProveedor=trim($_POST["dirProveedor"]);
$telProveedor=trim($_POST["telProveedor"]);
$emailProveedor=trim($_POST["emailProveedor"]);

$stmt=Conexion::conectar()->prepare("update PPROV set NIT='$nitProveedor', RAZON='$razonProveedor', NOMBRE='$nomProveedor', APELLIDO='$apProveedor', DIRECCION='$dirProveedor', TELEFONO='$telProveedor', EMAIL='$emailProveedor' where COD='$codProveedor'");

$stmt->execute();

echo '<script>
        window.location="VProveedor";
      </script>';

?>