<!-- Content Wrapper. Contains page content -->
<?php
//recuperando codigo Proveedor
$codProveedor=parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
$proveedor=controladorProveedor::ctrInfoProveedor($codProveedor);
?>
<div class="content-wrapper">
  <section class="content-header">

  </section>
  <!-- Main content -->
  <section class="content">

    <!-- Datos de factura -->

    <div class="card">
      <form action="EditProveedor?<?php echo $codProveedor;?>" method="post">
        <div class="card-header">
          <h3 class="card-title">Editar Proveedor</h3>

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
            <label for="">Cod. Proveedor</label>
            <input type="text" class="form-control" name="codProveedor" value="<?php echo $codProveedor;?>" readonly>
          </div>
          <div class="form-group col-md-3">
            <label for="">NIT</label>
            <input type="text" class="form-control" name="nitProveedor" value="<?php echo $proveedor["NIT"];?>">
          </div>
          <div class="form-group col-md-3">
            <label for="">Razon Social</label>
            <input type="text" class="form-control" name="razonProveedor" value="<?php echo $proveedor["RAZON"];?>">
          </div>
          <div class="form-group col-md-3">
            <label for="">Nombre(s)</label>
            <input type="text" class="form-control" name="nomProveedor" value="<?php echo $proveedor["NOMBRE"];?>">
          </div>
          <div class="form-group col-md-3">
            <label for="">Apellido(s)</label>
            <input type="text" class="form-control" name="apProveedor" value="<?php echo $proveedor["APELLIDO"];?>">
          </div>
          <div class="form-group col-md-3">
            <label for="">Dirección</label>
            <input type="text" class="form-control" name="dirProveedor" value="<?php echo $proveedor["DIRECCION"];?>">
          </div>
          <div class="form-group col-md-3">
            <label for="">Telefono(s)</label>
            <input type="text" class="form-control" name="telProveedor" value="<?php echo $proveedor["TELEFONO"];?>">
          </div>
          <div class="form-group col-md-3">
            <label for="">E-mail</label>
            <input type="email" class="form-control" name="emailProveedor" value="<?php echo $proveedor["EMAIL"];?>">
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
