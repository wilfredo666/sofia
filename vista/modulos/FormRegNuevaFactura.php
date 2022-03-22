<div class="content-wrapper">
  <section class="content-header">

  </section>
  <!-- Main content -->
  <section class="content">

    <!-- Datos de factura -->

    <div class="card">
      <form action="RegCliente" method="post">
        <div class="card-header">
          <h3 class="card-title">Registrar Factura</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        
        <div class="card-body row">
          <div class="form-group col-md-3">
            <label for="">Cod. Cliente</label>
            <input type="text" class="form-control" name="codClienteFac" placeholder="Ejm: 1000081023">
          </div>
          <div class="form-group col-md-3">
            <label for="">NIT</label>
            <input type="text" class="form-control" name="nitClienteFac">
          </div>
          <div class="form-group col-md-3">
            <label for="">Numero de Factura</label>
            <input type="text" class="form-control" name="numFac">
          </div>
          <div class="form-group col-md-3">
            <label for="">Fecha</label>
            <input type="date" class="form-control" name="fechaFac">
          </div>
          <div class="form-group col-md-3">
            <label for="">Sucursal</label>
            <input type="text" class="form-control" name="sucFac">
          </div>
          <div class="form-group col-md-3">
            <label for="">Punto de Venta</label>
            <input type="text" class="form-control" name="punFac">
          </div>
          <div class="form-group col-md-3">
            <label for="">Actividad</label>
            <input type="text" class="form-control" name="actFac">
          </div>
          <div class="form-group col-md-3">
            <label for="">Tipo de Factura</label>
            <input type="text" class="form-control" name="tipFac">
          </div>
        </div>
        
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>


  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
