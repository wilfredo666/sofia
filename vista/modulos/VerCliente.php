<?php
require_once "../../controlador/clienteControlador.php";
require_once "../../modelo/clienteModelo.php";
$codCliente=$_GET["codCliente"];

$cliente=controladorCliente::ctrInfoCliente($codCliente);

?>
 <div class="modal-header">
  <h4 class="modal-title"><span class="text-primary">Datos del cliente</h4>
    <button type="button" class="close" data-dismiss="modal" arial-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-sm-4">
        <div class="form-group">
          <label for="">Codigo Cliente</label>
          <p><?php echo $cliente["COD"];?></p>
        </div>
        <div class="form-group">
          <label for="">Dirección:</label>
          <p><?php echo $cliente["DIRECCION"];?></p>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="form-group">
          <label for="">Razon Social:</label>
          <p><?php echo $cliente["RAZON"];?></p>
        </div>
        <div class="form-group">
          <label for="">Nombre(s):</label>
          <p><?php echo $cliente["NOMBRE"]." ".$cliente["APELLIDO"];?></p>
        </div>

      </div>
      <div class="col-sm-4">
        <div class="form-group">
         <label for="">NIT:</label>
          <p><?php echo $cliente["NIT"];?></p>
        </div>
        <div class="form-group">
          <label for="">Telefono(s):</label>
          <p><?php echo $cliente["TELEFONO"];?></p>
        </div>
      </div>

    </div> 

  </div>
