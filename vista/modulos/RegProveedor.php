<?php
require_once "modelo/conexion.php";

$CodProveedor=trim($_POST["CodProveedor"]);
$nitProveedor=trim($_POST["nitProveedor"]);
$razonProveedor=trim($_POST["razonProveedor"]);
$nomProveedor=trim($_POST["nomProveedor"]);
$apProveedor=trim($_POST["apProveedor"]);
$dirProveedor=trim($_POST["dirProveedor"]);
$telProveedor=trim($_POST["telProveedor"]);

$stmt=Conexion::conectar()->prepare("insert into PPROV(COD, NIT, RAZON, NOMBRE, APELLIDO, DIRECCION, TELEFONO) values ($CodProveedor,'$nitProveedor', '$razonProveedor', '$nomProveedor', '$apProveedor', '$dirProveedor', '$telProveedor')");

$stmt->execute();
//$stmt->null;

echo '<script>
        window.location="VProveedor";
      </script>';

?>