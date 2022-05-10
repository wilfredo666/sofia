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
    $stmt=Conexion::conectar()->prepare("select * from  where COD='$codVenta'");
    $stmt->execute();
    return $stmt->fetch();

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
    Información del ultimo cufd
  ==============================*/
  static public function MdlInfoCufd(){
    $stmt=Conexion::conectar()->prepare("select * from FCUFD");
    $stmt->execute();
    return $stmt->fetchAll(); //abre la conexion
    //solo se puede hacer cerrar (close()) cuando devuelve
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
}