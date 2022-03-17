<!-- Content Wrapper. Contains page content -->
<?php
//recuperando codigo cliente
$codCliente=parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
$cliente=controladorCliente::ctrInfoCliente($codCliente);
?>
<div class="content-wrapper">
  <section class="content-header">

  </section>
  <!-- Main content -->
  <section class="content">

    <!-- Datos de factura -->

    <div class="card">
      <form action="EditCliente?<?php echo $codCliente;?>" method="post">
        <div class="card-header">
          <h3 class="card-title">Editar Cliente</h3>

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
            <input type="text" class="form-control" name="codCliente" value="<?php echo $codCliente;?>" readonly>
          </div>
          <div class="form-group col-md-3">
            <label for="">NIT</label>
            <input type="text" class="form-control" name="nitCliente" value="<?php echo $cliente["NIT"];?>">
          </div>
          <div class="form-group col-md-3">
            <label for="">Razon Social</label>
            <input type="text" class="form-control" name="razonCliente" value="<?php echo $cliente["RAZON"];?>">
          </div>
          <div class="form-group col-md-3">
            <label for="">Nombre(s)</label>
            <input type="text" class="form-control" name="nomCliente" value="<?php echo $cliente["NOMBRE"];?>">
          </div>
          <div class="form-group col-md-3">
            <label for="">Apellido(s)</label>
            <input type="text" class="form-control" name="apCliente" value="<?php echo $cliente["APELLIDO"];?>">
          </div>
          <div class="form-group col-md-3">
            <label for="">Dirección</label>
            <input type="text" class="form-control" name="dirCliente" value="<?php echo $cliente["DIRECCION"];?>">
          </div>
          <div class="form-group col-md-3">
            <label for="">Telefono(s)</label>
            <input type="text" class="form-control" name="telCliente" value="<?php echo $cliente["TELEFONO"];?>">
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
