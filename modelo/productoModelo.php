<?php 
require_once "conexion.php";

class ModeloProducto{

  /*==============================
    Mostrar productos
  ==============================*/

  static public function MdlMostrarProductos(){
    $stmt=Conexion::conectar()->prepare("select * from IPRODUCTO");
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