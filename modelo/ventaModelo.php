<?php 
require_once "conexion.php";

class ModeloVenta{

  /*==============================
    Mostrar Ventas
  ==============================*/
  static public function MdlMostrarVentas(){
    $stmt=Conexion::conectar()->prepare("select NUM, NFAC, NOMFACT, USUARIO, FECHA, MONTO from FCTROLF");
    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();
    $stmt=null;

  }

  /*==============================
    Información de venta
  ==============================*/
  static public function MdlInfoVenta($codVenta){
    $stmt=Conexion::conectar()->prepare("select NUM, NFAC, NOMFACT, USUARIO, FCTROLF.FECHA, MONTO, ESTADO, FCTROLF.CUF, NITCLI, CONCEPTO, PRECIO, CANTIDAD, DESCTO, TOTAL, FCTROLF.CUF
from FCTROLF
join FFACTURA
ON FFACTURA.CUF=FCTROLF.CUF
where NUM=$codVenta");
    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();
    $stmt=null;

  }

  /*==============================
    Información de sucursales
  ==============================*/
  static public function MdlInfoSucursal(){
    $stmt=Conexion::conectar()->prepare("select * from EMP_SUC");
    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();
    $stmt=null;
  }

  /*==============================
    Información de actividades
  ==============================*/
  static public function MdlInfoActividad(){
    $stmt=Conexion::conectar()->prepare("select * from FACTECON");
    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();
    $stmt=null;
  }

  /*==============================
    Información de puntos de venta
  ==============================*/
  static public function MdlInfoPuntoVenta(){
    $stmt=Conexion::conectar()->prepare("select * from FPUNTOVENTA");
    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();
    $stmt=null;
  }

  /*==============================
    Información del ultimo cufd
  ==============================*/
  static public function MdlInfoCufd(){
    $stmt=Conexion::conectar()->prepare("select * from FCUFD");
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();
    $stmt=null;
  }

  /*==============================
    Extraer leyenda aleatoria
  ==============================*/
  static public function MdlLeyenda($datos){
    $caeb=$datos["caeb"];
    $stmt=Conexion::conectar()->prepare("SELECT first 1 NOMBRE FROM FL453 WHERE CAEB='$caeb'
order by rand()");
    $stmt->execute();
    return $stmt->fetch();
    $stmt->close();
    $stmt=null;
  }

  /*==============================
    Registro nuevo cufd
  ==============================*/
  static public function MdlNuevoCufd($data){

    $cufd=$data["CODIGO"];
    $codControlCufd=$data["CODIGOCONTROL"];
    $fechaVigCufd=$data["FECHAVIGENCIA"];
    $direccionCufd=$data["DIRECCION"];

    $stmt=Conexion::conectar()->prepare("insert into FCUFD (CODIGO, CODIGOCONTROL, FECHAVIGENCIA, DIRECCION) values ('$cufd', '$codControlCufd', '$fechaVigCufd', '$direccionCufd')");

    if($stmt->execute()){
      return "ok";
    }else{
      return "error";
    }

    $stmt->close();
    $stmt=null;
  }

  /*=====================================================
    verificar la vigencia del cufd - extrayendo el ultimo
  ======================================================*/
  static public function MdlUltimoCufd(){
    $stmt=Conexion::conectar()->prepare("SELECT * FROM FCUFD where fecha=(select max(fecha) FROM FCUFD)");
    $stmt->execute();
    return $stmt->fetch(); 
    $stmt->close();
    $stmt=null;
  }

  /*=========================
  registrar factura
  ==========================*/
  static public function MdlRegistrarFactura($datos){


    $nitCli=$datos["nitCli"];
    $emailCli=$datos["emailCli"];
    $fecha=$datos["fecha"];
    $descuento=$datos["descuento"];
    $monto=$datos["monto"];
    $nomfact=$datos["nomfact"];
    $usuario=$datos["usuario"];
    $leyenda=$datos["leyenda"];
    $cuf=$datos["cuf"];
    $xml=$datos["xml"];
    $cufd=$datos["cufd"];
    $cuis=$datos["cuis"];
    $numFactura=$datos["numFactura"];


    $stmt=Conexion::conectar()->prepare("insert into FCTROLF(ESPEC, NFAC, NITCLI,  FECHA, FECHALIM, DESCUENTO, MONTO, NOMFACT, USUARIO, TN, CRED, FMA, LEYENDA, CUF, GIFTCARD, XML, CUFD, CUIS, EMAILCLI) values (3, $numFactura, '$nitCli', '$fecha', CURRENT_DATE+1, $descuento, $monto, '$nomfact', '$usuario', 'N', 'N', 'N', '$leyenda', '$cuf', 0.00, '$xml', '$cufd', '$cuis', '$emailCli')");

    if($stmt->execute()){
      return "ok";
    }else{
      return "error";
    }

    $stmt->close();
    $stmt=null;
  }

  /*=========================
    registrar detalle factura
    ==========================*/
  static public function MdlRegDetalleFactura($datos){
    $numFactura=$datos["numFactura"];
    $cuf=$datos["cuf"];
    $productos=$datos["productos"]; //arreglo con los productos

    $totProductos=count($productos);

    for($i=0;$i<$totProductos;$i++){

      $descripcion=$productos[$i]["descripcion"];
      $precioUnitario=$productos[$i]["precioUnitario"];
      $montoDescuento=$productos[$i]["montoDescuento"];
      $subTotal=$productos[$i]["subTotal"];
      $codigoProducto=$productos[$i]["codigoProducto"];
      $codigoProductoSin=$productos[$i]["codigoProductoSin"];
      $actividadEconomica=$productos[$i]["actividadEconomica"];
      $cantidad=$productos[$i]["cantidad"];
      $unidadMedida=$productos[$i]["unidadMedida"];

      $stmt=Conexion::conectar()->prepare("insert into FFACTURA(NUMFAC, CONCEPTO, PRECIO, DESCTO, TOTAL, COD, COPROSIN, ACTECON, CANTIDAD, CUF, CODUNI) values($numFactura, '$descripcion', $precioUnitario, $montoDescuento, $subTotal, '$codigoProducto', $codigoProductoSin, $actividadEconomica, $cantidad, '$cuf', $unidadMedida)");

      $stmt->execute();
    }
    return "ok";
    $stmt->close();
    $stmt=null;
  }

  /*=========================
    extraer numero de factura
    ==========================*/
  static public function MdlNumFactura($datos){
    $sucursal=$datos["sucursal"];
    $puntoVenta=$datos["puntoVenta"];

    $stmt=Conexion::conectar()->prepare("SELECT max(NFAC) FROM FCTROLF where SUC='$sucursal' and POS='$puntoVenta'");
    $stmt->execute();
    return $stmt->fetch(); 
    $stmt->close();
    $stmt=null;
  }

}