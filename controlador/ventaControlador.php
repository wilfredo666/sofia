<?php
//captura la url al iniciar sesion, porque solo ahi se carga este archivo
$ruta=parse_url($_SERVER['REQUEST_URI']);

//pero al falso el argumento por no tener path, no se ejecuta el contructor hasta que se solicite denuevo este archivo

if(isset($ruta["query"])){
  
  $metodo=$ruta["query"];
  $venta=new controladorVenta();
  $venta->$metodo();
}

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

  /*==================
  info  sucursales
  ===================*/
  static public function crtInfoSucursal(){
    $respuesta=ModeloVenta::MdlInfoSucursal();

    return $respuesta;
  }

  /*==================
  info actividades
  ===================*/
  static public function crtInfoActividad(){
    $respuesta=ModeloVenta::MdlInfoActividad();

    return $respuesta;
  }

  /*=======================
  extraccion del ultimo cufd
  ========================*/
  static public function crtInfoCufd(){
    require_once "../modelo/ventaModelo.php";
    $respuesta=ModeloVenta::MdlInfoCufd();
    echo json_encode($respuesta);
  }
}
