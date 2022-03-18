<?php
require_once "../../controlador/proveedorControlador.php";
require_once "../../modelo/proveedorModelo.php";


    $proveedores=controladorProveedor::ctrMostrarProveedores();

    $botones="<div class='btn-group'><button class='btn btn-warning' data-toggle='modal' data-target='#modalEditarProducto'><i class='fa fa-pencil-alt'></i></button><button class='btn btn-danger btnEliminarProveedor'><i class='fa fa-times'></i></button></div>";


    $datosJson= '{
    "data":[';
    foreach($proveedores as $key => $value){
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
