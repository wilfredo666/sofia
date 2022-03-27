<?php
require_once "controlador/plantillaControlador.php";
require_once "controlador/usuarioControlador.php";
require_once "controlador/clienteControlador.php";
require_once "controlador/proveedorControlador.php";
require_once "controlador/productoControlador.php";
require_once "controlador/ventaControlador.php";

require_once "modelo/ventaModelo.php";
require_once "modelo/clienteModelo.php";
require_once "modelo/proveedorModelo.php";
require_once "modelo/productoModelo.php";

$plantilla=new ControladorPlantilla();
$plantilla->ctrPlantilla();