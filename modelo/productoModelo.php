
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
  static public function MdlInfoProducto($codProducto){
    $stmt=Conexion::conectar()->prepare("select * from IPRODUCTO where COD='$codProveedor'");
    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();
    $stmt=null;

  }
}