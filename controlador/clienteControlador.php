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
 static public function ctrInfoCliente($codCliente){
    $respuesta=ModeloCliente::MdlInfoCliente($codCliente);

    return $respuesta;

  }


}

/*if(isset($_GET["codCliente"])){
  $infoCliente=new controladorCliente();
  $infoCliente->ctrInfoCliente($_GET["codCliente"]);
}*/
?>
