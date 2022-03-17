<?php
require_once "../../controlador/proveedorControlador.php";
require_once "../../modelo/proveedorModelo.php";
$codProveedor=$_GET["codProveedor"];

$proveedor=controladorProveedor::ctrInfoProveedor($codProveedor);

?>
 <div class="modal-header">
  <h4 class="modal-title"><span class="text-primary">Datos del proveedor</h4>
    <button type="button" class="close" data-dismiss="modal" arial-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-sm-4">
        <div class="form-group">
          <label for="">Codigo Proveedor</label>
          <p><?php echo $proveedor["COD"];?></p>
        </div>
        <div class="form-group">
          <label for="">Dirección:</label>
          <p><?php echo $proveedor["DIRECCION"];?></p>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="form-group">
          <label for="">Razon Social:</label>
          <p><?php echo $proveedor["RAZON"];?></p>
        </div>
        <div class="form-group">
          <label for="">Nombre(s):</label>
          <p><?php echo $proveedor["NOMBRE"]." ".$proveedor["APELLIDO"];?></p>
        </div>

      </div>
      <div class="col-sm-4">
        <div class="form-group">
         <label for="">NIT:</label>
          <p><?php echo $proveedor["NIT"];?></p>
        </div>
        <div class="form-group">
          <label for="">Telefono(s):</label>
          <p><?php echo $proveedor["TELEFONO"];?></p>
        </div>
      </div>

    </div> 

  </div>
