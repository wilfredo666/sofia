<div class="content-wrapper">
  <section class="content-header">

  </section>
  <!-- Main content -->
  <section class="content">

    <!-- Datos de factura -->

    <div class="card">
      <form action="RegProveedor" method="post" onsubmit="return validacionRegProveedor()">
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
            <input type="text" pattern="[A-Za-z0-9_-]{3,15}" title="No se acepta caracteres especiales" class="form-control" name="CodProveedor" placeholder="Ejm: 9800081023" id="codProveedor">
            <p class="text-danger" id="errorCodProv"></p>
          </div>
          <div class="form-group col-md-3">
            <label for="">NIT</label>
            <input type="text" class="form-control" name="nitProveedor" id="nitProveedor">
            <p class="text-danger" id="errorNitProv"></p>
          </div>
          <div class="form-group col-md-3">
            <label for="">Razon Social</label>
            <input type="text" class="form-control" name="razonProveedor" id="razonProveedor">
            <p class="text-danger" id="errorRazProv"></p>
          </div>
          <div class="form-group col-md-3">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="nomProveedor" id="nomProveedor">
            <p class="text-danger" id="errorNomProv"></p>
          </div>
          <div class="form-group col-md-3">
            <label for="">Apellido(s)</label>
            <input type="text" class="form-control" name="apProveedor" id="apProveedor">
            <p class="text-danger" id="errorApeProv"></p>
          </div>
          <div class="form-group col-md-3">
            <label for="">Direcci??n</label>
            <input type="text" class="form-control" name="dirProveedor" id="dirProveedor">
            <p class="text-danger" id="errorDirProv"></p>
          </div>
          <div class="form-group col-md-3">
            <label for="">Telefono(s)</label>
            <input type="text" class="form-control" name="telProveedor" id="telProveedor">
            <p class="text-danger" id="errorTelProv"></p>
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