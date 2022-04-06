<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">

  </section>
  <!-- Main content -->
  <section class="content">

    <!-- Datos de factura -->

    <div class="card">
      <form action="RegCliente" method="post">
        <div class="card-header">
          <h3 class="card-title">Registrar Cliente</h3>

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
            <input type="text" class="form-control" name="codCliente" placeholder="Ejm: 1000081023">
          </div>
          <div class="form-group col-md-3">
            <label for="">NIT</label>
            <input type="text" class="form-control" name="nitCliente">
          </div>
          <div class="form-group col-md-3">
            <label for="">Razon Social</label>
            <input type="text" class="form-control" name="razonCliente">
          </div>
          <div class="form-group col-md-3">
            <label for="">Nombre(s)</label>
            <input type="text" class="form-control" name="nomCliente">
          </div>
          <div class="form-group col-md-3">
            <label for="">Apellido(s)</label>
            <input type="text" class="form-control" name="apCliente">
          </div>
          <div class="form-group col-md-3">
            <label for="">Dirección</label>
            <input type="text" class="form-control" name="dirCliente">
          </div>
          <div class="form-group col-md-3">
            <label for="">Telefono(s)</label>
            <input type="text" class="form-control" name="telCliente">
          </div>
          <div class="form-group col-md-3">
            <label for="">E-mail</label>
            <input type="email" class="form-control" name="emailCliente">
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
