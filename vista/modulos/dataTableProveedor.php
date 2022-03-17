<?php

require_once "../../controlador/proveedorControlador.php";
require_once "../../modelo/proveedorModelo.php";

class TablaProveedores{

  /*===========================
Mostrar la tabla de clientes
============================*/
  public function mostrarTablaProveedores(){

    $proveedores=controladorProveedor::ctrMostrarProveedores();

    $botones="<div class='btn-group'><button class='btn btn-warning' data-toggle='modal' data-target='#modalEditarProducto'><i class='fa fa-pencil-alt'></i></button><button class='btn btn-danger btnEliminarProducto'><i class='fa fa-times'></i></button></div>";


    /*$datosJson= '{
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
  }';*/

    $datosJson= '{

"data":[

[
"'.$botones.'",
      "year",
      "Edinburgh",
      "5421",
      "2011/04/25",
      "$320,800"
]

]
  }';


    /* $datosJson= '{

        "data": [
    [
      "Tiger Nixon",
      "System Architect",
      "Edinburgh",
      "5421",
      "2011/04/25",
      "$320,800"
    ],
    [
      "Garrett Winters",
      "Accountant",
      "Tokyo",
      "8422",
      "2011/07/25",
      "$170,750"
    ]
    ]
  }';*/

    echo $datosJson;

  }
}

/*===========================
Activar la tabla de productos
============================*/
$activarProductos=new TablaProveedores();
$activarProductos->mostrarTablaProveedores();
