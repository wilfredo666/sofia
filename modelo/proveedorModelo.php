<?php 
require_once "conexion.php";

class ModeloProveedor{

  /*==============================
    Mostrar proveedores
  ==============================*/

  static public function MdlMostrarProveedores(){
    $stmt=Conexion::conectar()->prepare("select * from PPROV");
    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();
    $stmt=null;

  }
  
  /*==============================
    Información de proveedor
  ==============================*/
  static public function MdlInfoProveedor($codProveedor){
    $stmt=Conexion::conectar()->prepare("select * from PPROV where COD='$codProveedor'");
    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();
    $stmt=null;

  }
}