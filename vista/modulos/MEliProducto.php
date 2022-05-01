<?php
$codProducto=$_GET["codProducto"];

?>
 <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" arial-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  <div class="modal-body">
   <h2>Esta seguro de eliminar este producto?</h2>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-danger float-right" onclick="EliProducto('<?php echo $codProducto;?>');">Eliminar</button>
  </div>