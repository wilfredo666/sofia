<?php
require_once "controlador/plantillaControlador.php";
require_once "controlador/usuarioControlador.php";
require_once "controlador/clienteControlador.php";
require_once "controlador/proveedorControlador.php";


require_once "modelo/clienteModelo.php";
$plantilla=new ControladorPlantilla();
$plantilla->ctrPlantilla();