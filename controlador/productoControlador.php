<?php

class controladorProducto{

  /*==================
  mostrar productos
  ===================*/
  static public function ctrMostrarProductos(){

    $respuesta=ModeloProducto::MdlMostrarProductos();

    return $respuesta;
  }

  /*==================
  info Producto
  ===================*/
 static public function ctrInfoProducto($txtBus){
    $respuesta=ModeloProducto::MdlInfoProducto($txtBus);

    return $respuesta;

  }


}

/*if(isset($_GET["codCliente"])){
  $infoCliente=new controladorCliente();
  $infoCliente->ctrInfoCliente($_GET["codCliente"]);
}*/
?>