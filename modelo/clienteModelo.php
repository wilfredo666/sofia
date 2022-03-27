<?php
require_once "conexion.php";

class ModeloCliente{

  /*==============================
    Mostrar clientes
  ==============================*/

  static public function MdlMostrarClientes(){
    $stmt=Conexion::conectar()->prepare("select * from LCLI");
    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();
    $stmt=null;

  }
  
  /*==============================
    Información de cliente
  ==============================*/
  static public function MdlInfoCliente($txtBus){
    $stmt=Conexion::conectar()->prepare("select * from LCLI where NIT='$txtBus' OR COD='$txtBus'");
    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();
    $stmt=null;

  }
}