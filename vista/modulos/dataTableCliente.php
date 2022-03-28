<?php
require_once "../../controlador/clienteControlador.php";
require_once "../../modelo/clienteModelo.php";



    $clientes=controladorCliente::ctrMostrarClientes();


    $datosJson= '{
    "data":[';
    foreach($clientes as $key => $value){
      $botones="<div class='btn-group'><button class='btn btn-info' onclick='MVerCliente(".$value['COD'].")'><i class='fas fa-eye'></i></button><button class='btn btn-secondary' onclick='MEditCliente(".$value['COD'].")'><i class='fa fa-edit'></i></button><button class='btn btn-danger' onclick='MEliCliente(".$value['COD'].")'><i class='fa fa-trash'></i></button></div>";
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

