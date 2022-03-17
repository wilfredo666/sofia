<div class="content-wrapper">
  <section class="content-header">

  </section>
  <!-- Main content -->
  <section class="content">

    <!-- Datos de factura -->

    <div class="card">
      <form action="RegProveedor" method="post"> 
        <div class="card-header">
          <h3 class="card-title">Registrar Proveedor</h3>

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
            <label for="">Codigo Proveedor</label>
            <input type="text" class="form-control" name="codProveedor" placeholder="Ejm: 9800081023">
          </div>
          <div class="form-group col-md-3">
            <label for="">NIT</label>
            <input type="text" class="form-control" name="nitProveedor">
          </div>
          <div class="form-group col-md-3">
            <label for="">Razon Social</label>
            <input type="text" class="form-control" name="razonProveedor">
          </div>
          <div class="form-group col-md-3">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="nomProveedor">
          </div>
          <div class="form-group col-md-3">
            <label for="">Apellido(s)</label>
            <input type="text" class="form-control" name="apProveedor">
          </div>
          <div class="form-group col-md-3">
            <label for="">Dirección</label>
            <input type="text" class="form-control" name="dirProveedor">
          </div>
          <div class="form-group col-md-3">
            <label for="">Telefono(s)</label>
            <input type="text" class="form-control" name="telProveedor">
          </div>
        </div>
        
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Guardar Proveedor</button>
        </div>
      </form>
    </div>
      </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->