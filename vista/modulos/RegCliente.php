<?php
require_once "modelo/conexion.php";

$codCliente=trim($_POST["codCliente"]);
$nitCliente=trim($_POST["nitCliente"]);
$razonCliente=trim($_POST["razonCliente"]);
$nomCliente=trim($_POST["nomCliente"]);
$apCliente=trim($_POST["apCliente"]);
$dirCliente=trim($_POST["dirCliente"]);
$telCliente=trim($_POST["telCliente"]);

$stmt=Conexion::conectar()->prepare("insert into LCLI(COD, NIT, RAZON, NOMBRE, APELLIDO, DIRECCION) values ($codCliente, '$nitCliente', '$razonCliente', '$nomCliente', '$apCliente', '$dirCliente', '$telCliente)");

$stmt->execute();
//$stmt->null;

echo '<script>
        window.location="VCliente";
      </script>';

?>