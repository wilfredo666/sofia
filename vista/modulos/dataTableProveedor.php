<?php
require_once "../../controlador/proveedorControlador.php";
require_once "../../modelo/proveedorModelo.php";


$proveedores=controladorProveedor::ctrMostrarProveedores();


$datosJson= '{
    "data":[';
foreach($proveedores as $key => $value){
  $codProveedor=$value['COD']; //codigo del proveedor extraido del la bd
  $cod='\"'.$codProveedor.'\"'; // codigo del proveedor con comillas dobles

  $botones="<div class='btn-group'><button class='btn btn-info' onclick='MVerProveedor(".$cod.")'><i class='fas fa-eye'></i></button><button class='btn btn-secondary' onclick='MEditProveedor(".$cod.")'><i class='fa fa-edit'></i></button><button class='btn btn-danger' onclick='MEliProveedor(".$cod.")'><i class='fa fa-trash'></i></button></div>";
  $datosJson.='[
        "'.$value["COD"].'",
        "'.$value["NIT"].'",
        "'.$value["RAZON"].'",
        "'.$value["NOMBRE"]." ".$value["APELLIDO"].'",
        "'.$value["DIRECCION"].'",
        "'.$botones.'"
      ],';

}
$datosJson=substr($datosJson, 0, -1);
$datosJson.=']
  }';


echo $datosJson;
