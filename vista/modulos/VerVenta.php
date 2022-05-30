<?php
require_once "../../controlador/ventaControlador.php";
require_once "../../modelo/ventaModelo.php";
$codVenta=$_GET["codVenta"];

$factura=controladorVenta::ctrInfoVenta($codVenta);
if(isset($factura[0]["CUF"])){
?>

<div class="modal-header">
  <h4 class="modal-title">Detalle Factura</h4>
  <button type="button" class="close" data-dismiss="modal" arial-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <div class="row">
    <div class="col-sm-4">
      <div class="form-group">
        <label for="">#Factura:</label>
        <p><?php echo $factura[0]["NFAC"];?></p>
      </div>
      <div class="form-group">
        <label for="">Cliente:</label>
        <p><?php echo $factura[0]["NOMFACT"];?></p>
      </div>


    </div>

    <div class="col-sm-4">
      <div class="form-group">
        <label for="">Fecha de emision:</label>
        <p><?php echo $factura[0]["FECHA"];?></p>
      </div>
      <div class="form-group">
        <label for="">Emitido por:</label>
        <p><?php echo $factura[0]["USUARIO"];?></p>
      </div>

    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label for="">Estado:</label>
        <?php 
        switch($factura[0]["ESTADO"]){
          case "V":
            echo "<p class='text-success'>Valida</p>";
            break 1;
          case "A":
            echo "<p class='text-danger'>Anulada</p>";
            break 1;
          case "E":
            echo "<p class='text-warning'>Extraviada</p>";
            break 1;
          case "N":
            echo "<p class='text-info'>No utilizada</p>";
            break 1;
          case "C":
            echo "<p class='text-success'>Emitida en contingencia</p>";
            break 1;
          default:
            echo "<p class='text-info'>Pendiente</p>";
            break;
        }
        ?>
      </div>
    </div>

  </div> 
  <div class="row">
    <div class="col-sm-12">
      <table class="table">
        <thead>
          <tr>
            <th>Cantidad</th>
            <th>Descricion</th>
            <th>P. Unitario</th>
            <th>Descuento</th>
            <th>P. Total</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($factura as $value){
          ?>
          <tr>
            <td><?php echo $value["CANTIDAD"];?></td>
            <td><?php echo $value["CONCEPTO"];?></td>
            <td><?php echo $value["PRECIO"];?></td>
            <td><?php echo $value["DESCTO"];?></td>
            <td><?php echo $value["TOTAL"];?></td>
          </tr>
          <?php }?>
          <tr>
            <td colspan="4"><b>Total(Bs.)</b></td>
            <td><b><?php echo $factura[0]["MONTO"];?></b></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div> 

</div>

<?php }?>