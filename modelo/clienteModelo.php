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
  static public function MdlInfoCliente($codCliente){
    $stmt=Conexion::conectar()->prepare("select * from LCLI where COD='$codCliente'");
    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();
    $stmt=null;

  }
}