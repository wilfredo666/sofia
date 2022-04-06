<?php
require_once "modelo/conexion.php";

//recuperando codigo cliente
$codCliente=parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);

$nitCliente=trim($_POST["nitCliente"]);
$razonCliente=trim($_POST["razonCliente"]);
$nomCliente=trim($_POST["nomCliente"]);
$apCliente=trim($_POST["apCliente"]);
$dirCliente=trim($_POST["dirCliente"]);
$telCliente=trim($_POST["telCliente"]);
$emailCliente=trim($_POST["emailCliente"]);

$stmt=Conexion::conectar()->prepare("update LCLI set NIT='$nitCliente', RAZON='$razonCliente', NOMBRE='$nomCliente', APELLIDO='$apCliente', DIRECCION='$dirCliente', TELEFONO='$telCliente', EMAIL='$emailCliente' where COD='$codCliente'");

$stmt->execute();

echo '<script>
        window.location="VCliente";
      </script>';

?>