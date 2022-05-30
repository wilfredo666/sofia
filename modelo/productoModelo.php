<?php 
require_once "conexion.php";

class ModeloProducto{

  /*==============================
    Mostrar productos
  ==============================*/

  static public function MdlMostrarProductos(){
    $stmt=Conexion::conectar()->prepare("select IPRODUCTO.COD, NOMBRE, MARCA, PROVEEDOR, UNIDAD, PVTAML, LOTE, CODSIN, CODCAEB, UNIMEDIDA, ACTECON from IPRODUCTO join FACTECON on  FACTECON.COD=IPRODUCTO.CODCAEB");
    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();
    $stmt=null;

  }
  
  /*==============================
    Información de producto
  ==============================*/
  static public function MdlInfoProducto($txtBus){
    $stmt=Conexion::conectar()->prepare("select COD, NOMBRE, MARCA, PROVEEDOR, UNIDAD, PVTAML, LOTE, CODSIN, CODCAEB, UNIMEDIDA from IPRODUCTO where COD='$txtBus'");
    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();
    $stmt=null;

  }
}