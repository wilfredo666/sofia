<?php
require_once "../../controlador/productoControlador.php";
require_once "../../modelo/productoModelo.php";
$codProducto=$_GET["codProducto"];

$producto=controladorProducto::ctrInfoProducto($codProducto);

?>
 <div class="modal-header">
  <h4 class="modal-title"><span class="text-primary">Datos del producto</h4>
    <button type="button" class="close" data-dismiss="modal" arial-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-sm-4">
        <div class="form-group">
          <label for="">Codigo Producto</label>
          <p><?php echo $producto["COD"];?></p>
        </div>
        <div class="form-group">
          <label for="">Nombre</label>
          <p><?php echo $producto["NOMBRE"];?></p>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="form-group">
          <label for="">Marca:</label>
          <p><?php echo $producto["MARCA"];?></p>
        </div>
        <div class="form-group">
          <label for="">Proveedor:</label>
          <p><?php echo $producto["PROVEEDOR"];?></p>
        </div>

      </div>

    </div> 

  </div>
