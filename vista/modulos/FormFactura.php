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
            <label for=""># de Factura</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group col-md-3">
            <label for="">Autoriazación</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group col-md-3">
            <label for="">NIT Cliente</label>
            <input type="text" class="form-control" placeholder="Ejm: 002">
          </div>
          <div class="form-group col-md-3">
            <label for="">Nombre o Razón social</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group col-md-3">
            <label for="">Fecha</label>
            <input type="date" class="form-control">
          </div>
          <div class="form-group col-md-3">
            <label for="">Fecha Limite</label>
            <input type="date" class="form-control">
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
            <label for="">Cantidad</label>
            <input type="number" class="form-control" id="CantProducto" name="CantProducto">
          </div>
          <div class="form-group col-md-5">
            <label for="">Decripción</label>
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
            <button class="btn btn-info btn-circle form-control">
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
