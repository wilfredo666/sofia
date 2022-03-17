<?php

class controladorProveedor{

  /*==================
  mostrar proveedores
  ===================*/
  static public function ctrMostrarProveedores(){

    $respuesta=ModeloProveedor::MdlMostrarProveedores();

    return $respuesta;
  }

  /*==================
  info Proveedor
  ===================*/
 static public function ctrInfoProveedor($codProveedor){
    $respuesta=ModeloProveedor::MdlInfoProveedor($codProveedor);

    return $respuesta;

  }


}

/*if(isset($_GET["codCliente"])){
  $infoCliente=new controladorCliente();
  $infoCliente->ctrInfoCliente($_GET["codCliente"]);
}*/
?>
