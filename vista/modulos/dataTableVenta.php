<?php
require_once "../../controlador/ventaControlador.php";
require_once "../../modelo/ventaModelo.php";



$ventas=controladorVenta::ctrMostrarVentas();


$datosJson= '{
    "data":[';
foreach($ventas as $key => $value){
  $codVenta=$value['NUM']; //# de factura venta extraido del la bd
  $cod='\"'.$codVenta.'\"'; //# de factura venta con comillas dobles
  
  $botones="<div class='btn-group'><button class='btn btn-info' onclick='MVerVenta(".$cod.")'><i class='fas fa-eye'></i></button><button class='btn btn-secondary' onclick='MEditVenta(".$cod.")'><i class='fa fa-edit'></i></button><button class='btn btn-danger' onclick='MEliVenta(".$cod.")'><i class='fa fa-trash'></i></button></div>";
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

