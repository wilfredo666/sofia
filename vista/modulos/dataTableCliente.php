<?php

require_once "../controlador/clienteControlador.php";
require_once "../modelo/clienteModelo.php";

class TablaClientes{

/*===========================
Mostrar la tabla de clientes
============================*/
  public function mostrarTablaClientes(){

    $clientes=controladorCliente::ctrMostrarClientes();

    $botones="<div class='btn-group'><button class='btn btn-warning' data-toggle='modal' data-target='#modalEditarProducto'><i class='fa fa-pencil-alt'></i></button><button class='btn btn-danger btnEliminarProducto'><i class='fa fa-times'></i></button></div>";


    $datosJson= '{
    "data":[';
    foreach($clientes as $key => $value){
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

  }
}

/*===========================
Activar la tabla de productos
============================*/
$activarProductos=new TablaClientes();
$activarProductos->mostrarTablaClientes();
