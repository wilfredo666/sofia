<?php
require_once "../../controlador/productoControlador.php";
require_once "../../modelo/productoModelo.php";


    $productos=controladorProducto::ctrMostrarProductos();


    $datosJson= '{
    "data":[';
    foreach($productos as $key => $value){
      $codProducto=$value['COD']; //codigo del producto extraido del la bd
      $cod='\"'.$codProducto.'\"'; // codigo del producto con comillas dobles
      
      $botones="<div class='btn-group'><button class='btn btn-info' onclick='MVerProducto(".$cod.")'><i class='fas fa-eye'></i></button><button class='btn btn-secondary' onclick='MEditProducto(".$cod.")'><i class='fa fa-edit'></i></button><button class='btn btn-danger' onclick='MEliProducto(".$cod.")'><i class='fa fa-trash'></i></button></div>";
      
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
