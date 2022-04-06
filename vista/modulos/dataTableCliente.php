<?php
require_once "../../controlador/clienteControlador.php";
require_once "../../modelo/clienteModelo.php";



$clientes=controladorCliente::ctrMostrarClientes();
/*<button class='btn btn-danger' onclick='MEliCliente(".$value['COD'].")'><i class='fa fa-trash'></i></button>*/

$datosJson= '{
    "data":[';
foreach($clientes as $key => $value){
  $codCliente=$value['COD']; //codigo del cliente extraido del la bd
  $cod='\"'.$codCliente.'\"'; // codigo del cliente con comillas dobles
  
  $botones="<div class='btn-group'><button class='btn btn-info' onclick='MVerCliente(".$cod.")'><i class='fas fa-eye'></i></button><button class='btn btn-secondary' onclick='MEditCliente(".$cod.")'><i class='fa fa-edit'></i></button></div>";
  $datosJson.='[
        "'.$value["NIT"].'",
        "'.$value["RAZON"].'",
        "'.$value["NOMBRE"]." ".$value["APELLIDO"].'",
        "'.$value["EMAIL"].'",
        "'.$value["DIRECCION"].'",
        "'.$botones.'"
      ],';

}
$datosJson=substr($datosJson, 0, -1);
$datosJson.=']
  }';

echo $datosJson;

