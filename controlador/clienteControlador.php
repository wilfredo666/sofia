<?php

class controladorCliente{

  /*==================
  mostrar clientes
  ===================*/
  static public function ctrMostrarClientes(){

    $respuesta=ModeloCliente::MdlMostrarClientes();

    return $respuesta;
  }

  /*==================
  info cliente
  ===================*/
 static public function ctrInfoCliente($txtBus){
    $respuesta=ModeloCliente::MdlInfoCliente($txtBus);

    return $respuesta;

  }


}

?>
