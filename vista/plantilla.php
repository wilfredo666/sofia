<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Integrado SOFIA</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!--logotipo-->
    <link rel="icon" href="assest/img/Logo-Sofia-1.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assest/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assest/dist/css/adminlte.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="assest/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assest/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="assest/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  </head>


  <?php

  if(isset($_SESSION["iniciarSesion"])&& $_SESSION["iniciarSesion"]=="ok"){     

    include "asideMenu.php";

    if(isset($_GET["ruta"])){
      if($_GET["ruta"]=="inicio" ||
         $_GET["ruta"]=="FormFactura"||
         $_GET["ruta"]=="FormEditFactura"||
         $_GET["ruta"]=="RepVentas"||
         $_GET["ruta"]=="VCliente"||
         $_GET["ruta"]=="VProveedor"||
         $_GET["ruta"]=="VProducto"||
         $_GET["ruta"]=="FormRegCliente"||
         $_GET["ruta"]=="FormRegProveedor"||
         $_GET["ruta"]=="FormRegProducto"||
         $_GET["ruta"]=="RegCliente"||
         $_GET["ruta"]=="RegProveedor"||
         $_GET["ruta"]=="RegProducto"||
         $_GET["ruta"]=="FormEditCliente"||
         $_GET["ruta"]=="FormEditProveedor"||
         $_GET["ruta"]=="FormEditProducto"||
         $_GET["ruta"]=="EditCliente"||
         $_GET["ruta"]=="EditProveedor"||
         $_GET["ruta"]=="EditProducto"||
         $_GET["ruta"]=="conexion"||
         
         $_GET["ruta"]=="salir"){
        include "modulos/".$_GET["ruta"].".php";
      }

    }else{
      include "modulos/inicio.php";
    }
    include "footer.php";
  }else{
    include "login.php";
  }
  ?>