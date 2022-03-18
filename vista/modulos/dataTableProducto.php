<?php
require_once "../../controlador/productoControlador.php";
require_once "../../modelo/productoModelo.php";


    $productos=controladorProducto::ctrMostrarProductos();

    $botones="<div class='btn-group'><button class='btn btn-warning' data-toggle='modal' data-target='#modalEditarProducto'><i class='fa fa-pencil-alt'></i></button><button class='btn btn-danger btnEliminarProducto'><i class='fa fa-times'></i></button></div>";


    $datosJson= '{
    "data":[';
    foreach($productos as $key => $value){
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
