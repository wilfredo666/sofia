<div class="content-wrapper">
  <section class="content-header">

  </section>
  <!-- Main content -->
  <section class="content">

    <!-- Datos de factura -->

    <div class="card">
      <form action="RegProducto" method="post" onsubmit="return validacionRegProducto()">
        <div class="card-header">
          <h3 class="card-title">Registrar Producto</h3>

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
            <label for="">Codigo del Producto</label>
            <input type="text" class="form-control" name="CodProducto" placeholder="Ejm: 91961985" id="codProducto">
            <p class="text-danger" id="errorCodPro"></p>
          </div>
          <div class="form-group col-md-3">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="nomProducto">
          </div>
          <div class="form-group col-md-3">
            <label for="">Marca</label>
            <input type="text" class="form-control" name="marcaProducto">
          </div>
          <div class="form-group col-md-3">
            <label for="">Proveedor</label>
            <input type="text" class="form-control" name="nomProveedorProducto">
          </div>
          <div class="form-group col-md-3">
            <label for="">Unidad</label>
            <input type="text" class="form-control" name="unidadProducto">
          </div>
          <div class="form-group col-md-6">
            <label for="">Imagen</label>
            <input type="file" class="form-control" name="imagenProducto" value="Seleccione imagen del Producto">
          </div>
        </div>
        
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Guardar Producto</button>
        </div>
      </form>
    </div>
      </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->