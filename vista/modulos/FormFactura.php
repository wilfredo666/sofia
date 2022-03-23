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
         <div class="form-group col-md-3">
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
          <div class="form-group col-md-4">
            <label for="">Señor(es)</label>
            <input type="text" class="form-control" placeholder="Nombre del Cliente">
          </div>
           <div class="form-group col-md-3" align="left">
           <!--<label for="">NIT:</label>-->
            <!--<input type="text" class="form-control" disabled placeholder="Ejm: 1002065859">-->
            <ul><b>NIT: EJEMPLO</b><?php echo "";?></ul>
            <ul><b>Dir: EJEMPLO</b><?php echo "";?></ul>
            
          </div>
         
           <div class="form-group col-md-7">
            <label for="">Numero de Autorizacion</label> 
               <select type="text" class="form-control col-md-7">
                   <option value="autorizacionEjemplo1">Ejemplo1</option>
                   <option value="autorizacionEjemplo2">Ejemplo2</option>
               </select>
            </div>
          
           <div class="form-group col-md-3">
            <!--<label for="">Dir.:</label>-->
            <ul><b>Razon S.: EJEMPLO</b><?php echo "";?></ul>
            <ul><b>Telf: EJEMPLO</b><?php echo "";?></ul>
            <!--<input type="text" class="form-control" placeholder="Ejm: Direccion" onkeyup="buscarnit();" id="nitCliente">-->
          </div>
          <div class="form-group col-md-4">
            <label for="">NIT/CI</label> 
               <input type="text" class="form-control">
            </div>
            <div class="form-group col-md-4">
            <label for="">Observaciones</label> 
               <input type="text" class="form-control" placeholder="Dejar vacio en caso de no necesitarlo">
            </div>
            <div class="form-group col-md-5">
            <label for="">Tipo de pago</label> 
               <select type="text" class="form-control">
                   <option value="Efectivo">Efectivo</option>
                   <option value="Credito" selected>Credito</option>
               </select>
            </div>
          
        </form>
      </div>

      <!-- /.card-body -->
    </div>

    <!-- Agregar productos -->
    <div class="card">
      <div class="card-body">
        <form action="" class="row" id="formDetalle">
          <div class="form-group col-md-2">
            <label for="">Concepto</label>
            <input type="number" class="form-control" id="CantProducto" name="CantProducto">
          </div>
          <div class="form-group col-md-5">
            <label for="">Cantidad</label>
            <input type="text" class="form-control" id="DesProducto" name="DesProducto" placeholder="Buscar por codigo o descripción">
          </div>
          <div class="form-group col-md-2">
            <label for="">P. Unitario</label>
            <input type="text" class="form-control" id="PreUnitario" name="PreUnitario">
          </div>
          <div class="form-group col-md-2">
            <label for="">P. Total</label>
            <input type="text" class="form-control" id="PreTotal" name="PreTotal">     
          </div>
          <div class="form-group col-md-1">
            <label for="">&nbsp;</label>
            <button type="button" class="btn btn-info btn-circle form-control" onclick="agregarCarrito()">
              <i class="fas fa-plus"></i>
            </button>
          </div>
          </div>
        <div class="card-footer">
          <button class="btn btn-success">Guardar</button>
        </div>
      </div>
      </form>
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
