<?php
require_once "../../controlador/ventaControlador.php";
require_once "../../modelo/ventaModelo.php";
$codVenta=$_GET["codVenta"];

$cliente=controladorVenta::ctrInfoVenta($codVenta);

?>
 <div class="modal-header">
  <h4 class="modal-title"><span class="text-primary">Detalle Factura</h4>
    <button type="button" class="close" data-dismiss="modal" arial-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-sm-4">
        <div class="form-group">
          <label for="">#Factura:</label>
          <p>01238</p>
        </div>
        <div class="form-group">
          <label for="">Cliente:</label>
          <p>Alberto Apaza</p>
        </div>


      </div>

      <div class="col-sm-4">
        <div class="form-group">
          <label for="">Fecha de emision:</label>
          <p>15-02-2022</p>
        </div>
        <div class="form-group">
          <label for="">Emitido por:</label>
          <p>Usr. Mir01</p>
        </div>

      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label for="">Estado:</label>
          <p>Emitido</p>
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
              <th>P. Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>lorem ipsum</td>
              <td>2000</td>
              <td>2000</td>
            </tr>
            <tr>
              <td>3</td>
              <td>lorem ipsum</td>
              <td>1500</td>
              <td>4500</td>
            </tr>
            <tr>
              <td>2</td>
              <td>lorem ipsum</td>
              <td>200</td>
              <td>400</td>
            </tr>
            <tr>
              <td colspan="3"><b>Total</b></td>
              <td><b>6900</b></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div> 

  </div>
