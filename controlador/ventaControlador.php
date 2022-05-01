<?php

class controladorVenta{

  /*==================
  mostrar ventas
  ===================*/
  static public function ctrMostrarVentas(){

    $respuesta=ModeloVenta::MdlMostrarVentas();

    return $respuesta;
  }

  /*==================
  info  venta
  ===================*/
  static public function ctrInfoVenta($codVenta){
    $respuesta=ModeloVenta::MdlInfoVenta($codVenta);

    return $respuesta;

  }

  static public function crtInfoSucursal(){
    $respuesta=ModeloVenta::MdlInfoSucursal();

    return $respuesta;
  }
  
  static public function crtInfoActividad(){
    $respuesta=ModeloVenta::MdlInfoActividad();

    return $respuesta;
  }
}

?>
