<?php
require_once "../../controlador/ventaControlador.php";
require_once "../../modelo/ventaModelo.php";



    $ventas=controladorVenta::ctrMostrarVentas();

    $botones="<div class='btn-group'><button class='btn btn-info btn-circle' onclick=''><i class='fa fa-eye'></i></button><button class='btn btn-warning btn-circle' onclick=''><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-circle' onclick=''><i class='fa fa-trash'></i></button></div>";


   /* $datosJson= '{
    "data":[';
    foreach($ventas as $key => $value){
      $datosJson.='[
        "'.$value["NFAC"].'",
        "'.$value["NOMFAC"].'",
        "'.$value["USUARIO"].'",
        "'.$value["FECHA"].'",
        "000",
        "'.$botones.'"
      ],';

    }
    $datosJson=substr($datosJson, 0, -1);
    $datosJson.=']
  }';*/
$datosJson= '{
    "data":[';
    foreach($ventas as $key => $value){
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

