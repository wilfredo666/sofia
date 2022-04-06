<?php
require_once "modelo/conexion.php";

$codCliente=trim($_POST["codCliente"]);
$nitCliente=trim($_POST["nitCliente"]);
$razonCliente=trim($_POST["razonCliente"]);
$nomCliente=trim($_POST["nomCliente"]);
$apCliente=trim($_POST["apCliente"]);
$dirCliente=trim($_POST["dirCliente"]);
$telCliente=trim($_POST["telCliente"]);
$emailCliente=trim($_POST["emailCliente"]);

$stmt=Conexion::conectar()->prepare("insert into LCLI(COD, NIT, RAZON, NOMBRE, APELLIDO, DIRECCION, TELEFONO, EMAIL) values ('$codCliente', '$nitCliente', '$razonCliente', '$nomCliente', '$apCliente', '$dirCliente', '$telCliente', '$emailCliente')");

$stmt->execute();
//$stmt->null;

echo '<script>
        window.location="VCliente";
      </script>';

?>