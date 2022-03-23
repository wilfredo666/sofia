<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">

  </section>
  <!-- Main content -->
  <section class="content">

    <!-- Datos de factura -->
    <div class="card">

      <div class="card-header">
        <h3 class="card-title">Factura</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>

      <!--ref.: ffcontrol.pdf-->
      <div class="card-body">
        <form action="" class="row">
          <div class="form-group row col-md-8">
            <div class="form-group col-md-6">
              <label for="">Numero de Autorizacion</label> 
              <select type="text" class="form-control">
                <option value="">Seleccionar</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="">Señor(es)</label>
              <input type="text" class="form-control" placeholder="Codigo o nombre del Cliente" onkeyup="busCliente">
            </div>
            <div class="form-group col-md-6">
              <label for="">Tipo Documento</label>
              <select type="text" class="form-control">
                <option value="tipDocEjemplo1">Ninguno</option>
                <option value="tipDocEjemplo2">1|CI-CEDULA DE IDENTIDAD</option>
                <option value="tipDocEjemplo3">2|CEX-CEDULA DE IDENTIDAD EXTRANJERO</option>
                <option value="tipDocEjemplo4">3|PAS-PASAPORTE</option>
                <option value="tipDocEjemplo5">4|OD-OTRO DOCUMENTO DE IDENTIDAD</option>
                <option value="tipDocEjemplo6">5|NIT-NUMERO DE IDENTIFICACION TRIBUTARIA</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="">&nbsp;</label> 
              <input type="text" class="form-control" placeholder="Escribir los datos del documento seleccionado">
            </div>
            <div class="form-group col-md-6">
              <label for="">Observaciones</label> 
              <input type="text" class="form-control" placeholder="Observaciones respecto a la emision (opcional)">
            </div>
            <div class="form-group col-md-6">
              <label for="">Tipo de pago</label> 
              <select type="text" class="form-control">
                <option value="">Efectivo</option>
                <option value="" selected>Credito</option>
              </select>
            </div>
          </div>

          <div class="form-group col-md-4">
            <div class="card">
              <div class="card-header">
                <div class="card-title">
                  <h4>(Razon S. empresa)</h4>
                </div>
              </div>
              <div class="card-body">
                <p><b>NIT:</b>(nit de la empresa)<?php echo "";?></p>
                <p><b>Dir:</b>(direccion empresa)<?php echo "";?></p>
                <p><b>Telf:</b>(telefonos contacto)<?php echo "";?></p>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- Agregar productos -->
    <div class="card">
      <div class="card-body">
        <form action="" class="row" id="formDetalle">
         <div class="form-group col-md-5">
            <label for="">Concepto</label>
            <input type="text" class="form-control" id="DesProducto" name="DesProducto" placeholder="Buscar por codigo o descripción">
          </div>
          <div class="form-group col-md-2">
            <label for="">Cantidad</label>
            <input type="number" class="form-control" id="CantProducto" name="CantProducto">
          </div>
          <div class="form-group col-md-2">
            <label for="">P. Unitario</label>
            <input type="text" class="form-control" id="PreUnitario" name="PreUnitario">
          </div>
          <div class="form-group col-md-2">
            <label for="">P. Total</label>
            <input type="text" class="form-control" id="PreTotal" name="PreTotal" readonly>     
          </div>
          <div class="form-group col-md-1">
            <label for="">&nbsp;</label>
            <button type="button" class="btn btn-info btn-circle form-control" onclick="agregarCarrito()">
              <i class="fas fa-plus"></i>
            </button>
          </div>
        </form>
      </div>
      <div class="card-footer">
        <button class="btn btn-success">Guardar</button>
      </div>
    </div>

    <!-- Lista de productos -->
    <div class="card">
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th>Cantidad</th>
              <th>Descricion</th>
              <th>P. Unitario</th>
              <th>P. Total</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody id="ListaDetalle">

          </tbody>
        </table>
      </div>

      <!-- /.card-body -->
    </div>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
