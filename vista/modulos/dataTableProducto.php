<?php
require_once "../../controlador/productoControlador.php";
require_once "../../modelo/productoModelo.php";


    $productos=controladorProducto::ctrMostrarProductos();


    $datosJson= '{
    "data":[';
    foreach($productos as $key => $value){
      $botones="<div class='btn-group'><button class='btn btn-info' onclick='MVerProducto(".$value['COD'].")'><i class='fas fa-eye'></i></button><button class='btn btn-secondary' onclick='MEditProducto(".$value['COD'].")'><i class='fa fa-edit'></i></button><button class='btn btn-danger' onclick='MEliProducto(".$value['COD'].")'><i class='fa fa-trash'></i></button></div>";
      $datosJson.='[
        "'.$value["COD"].'",
        "'.$value["NOMBRE"].'",
        "'.$value["MARCA"].'",
        "'.$value["PROVEEDOR"].'",
        "'.$value["UNIDAD"].'",
        "'.$botones.'"
      ],';

    }
    $datosJson=substr($datosJson, 0, -1);
    $datosJson.=']
  }';


    echo $datosJson;
