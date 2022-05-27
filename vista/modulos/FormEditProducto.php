<?php
//recuperando codigo Producto
$codProducto=parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
$producto=controladorProducto::ctrInfoProducto($codProducto);
?>
<div class="content-wrapper">
  <section class="content-header">

  </section>
  <!-- Main content -->
  <section class="content">

    <!-- Datos de factura -->

    <div class="card">
      <form action="EditProducto?<?php echo $codProducto;?>" method="post">
        <div class="card-header">
          <h3 class="card-title">Editar Producto</h3>

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
            <input type="text" class="form-control" name="CodProducto" id="codProducto" value="<?php echo $producto["COD"];?>" readonly>
            <p class="text-danger" id="errorCodPro"></p>
          </div>
          <div class="form-group col-md-3">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="NomProducto" id="nomProducto" value="<?php echo $producto["NOMBRE"];?>">
            <p class="text-danger" id="errorNomPro"></p>
          </div>
          <div class="form-group col-md-3">
            <label for="">Marca</label>
            <input type="text" class="form-control" name="MarcaProducto" id="marcaProducto" value="<?php echo $producto["MARCA"];?>">
            <p class="text-danger" id="errorMarcPro"></p>
          </div>
          <div class="form-group col-md-3">
            <label for="">Proveedor</label>
            <input type="text" class="form-control" name="NomProveedorProducto" id="nomProveedorProducto" value="<?php echo $producto["PROVEEDOR"];?>">
            <p class="text-danger" id="errorProvPro"></p>
          </div>
          <div class="form-group col-md-3">
            <label for="">Unidad</label>
            <input type="text" class="form-control" name="UnidadProducto" id="unidadProducto" value="<?php echo $producto["UNIDAD"];?>">
            <p class="text-danger" id="errorUnidPro"></p>
          </div>
          <div class="form-group col-md-3">
            <label for="">Cod. SIN</label>
            <input type="text" class="form-control" name="codProSin" id="codProSin" value="<?php echo $producto["CODSIN"];?>" readonly>
          </div>
          <?php 
          $actividad=controladorVenta::crtInfoActividad();
          ?>
          <div class="form-group col-md-6">
            <label for="">Actividad</label>
            <select name="ProActividad" id="ProActividad" class="form-control" disabled>
              <option value="0">Seleccionar</option>
              <?php 
              foreach($actividad as $value){
              ?>
              <option value="<?php echo $value["COD"];?>" <?php if($value["COD"]==$producto["CODCAEB"]):?>selected<?php endif;?>><?php echo $value["ACTECON"];?></option>
              <?php
              }
              ?>
            </select>
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