<?php
require_once "../../controlador/ventaControlador.php";
require_once "../../modelo/ventaModelo.php";



$ventas=controladorVenta::ctrMostrarVentas();


$datosJson= '{
    "data":[';
foreach($ventas as $key => $value){
  $botones="<div class='btn-group'><button class='btn btn-info' onclick='MVerVenta(".$value['COD'].")'><i class='fas fa-eye'></i></button><button class='btn btn-secondary' onclick='MEditVenta(".$value['COD'].")'><i class='fa fa-edit'></i></button><button class='btn btn-danger' onclick='MEliVenta(".$value['COD'].")'><i class='fa fa-trash'></i></button></div>";
  $datosJson.='[
        "'.$value["NFAC"].'",
        "'.$value["NOMFACT"].'",
        "'.$value["USUARIO"].'",
        "'.$value["FECHA"].'",
        "'.$value["MONTO"].'",
        "'.$botones.'"
      ],';

}
$datosJson=substr($datosJson, 0, -1);
$datosJson.=']
  }';
echo $datosJson;

