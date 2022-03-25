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
          <div class="form-group row col-md-8">
            <div class="form-group col-md-2">
              <label for="">Fecha</label> 
              <input type="text" class="form-control" value="<?php echo date("d-m-Y");?>" disabled>
            
            </div>
            <div class="form-group col-md-3">
              <label for="">Sucursal</label> 
              <input type="text" class="form-control" placeholder="Emp_Suc.num" onkeyup="busCliente">
            </div>
            <div class="form-group col-md-3">
              <label for="">Punto de Venta</label>
              <input type="text" class="form-control" onkeyup="busCliente" placeholder="Esta en Pendiente">
            </div>
            <div class="form-group col-md-3">
              <label for="">Tipo de Factura</label>
              <input type="text" class="form-control" placeholder="Sale de la API" onkeyup="busCliente">
            </div>
            <!--<div class="form-group col-md-2">
              <label for="">Tipo Documento</label>
              <select type="text" class="form-control">
                <option value="tipDocEjemplo1">Ninguno</option>
                <option value="tipDocEjemplo2">1|CI-CEDULA DE IDENTIDAD</option>
                <option value="tipDocEjemplo3">2|CEX-CEDULA DE IDENTIDAD EXTRANJERO</option>
                <option value="tipDocEjemplo4">3|PAS-PASAPORTE</option>
                <option value="tipDocEjemplo5">4|OD-OTRO DOCUMENTO DE IDENTIDAD</option>
                <option value="tipDocEjemplo6">5|NIT-NUMERO DE IDENTIFICACION TRIBUTARIA</option>
              </select>
            </div>-->
            <div class="form-group col-md-7">
              <label for="">Actividad</label> 
              <input type="text" class="form-control" placeholder="Sale de la API">
            </div>
            <div class="form-group col-md-4">
              <label for="">Email</label> 
              <input type="text" class="form-control" placeholder="LCLI.email">
            </div>
            <div class="form-group col-md-4">
              <label for="">NIT</label> 
              <div class="input-group" >
              <input type="text" class="form-control" placeholder="LCLI.NIT">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">
                  <i class="fas fa-search">  
              </i>
              </button>
              </div>
             <!-- <button type="button" class="btn btn-outline-primary btn-block"> 
              <i class="fas fa-search">  
              </i>
              </button>-->
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="">Nombre o Razon social</label> 
              <div class="input-group" >
              <input type="text" class="form-control" placeholder="LCLI.razon'validar con API' devuelve por API">
               <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">
                  <i class="fas fa-search">  
                  </i>
                </button>
               </div>
              </div>
            </div>
            <!--<div class="form-group col-md-6">
              <label for="">Observaciones</label> 
              <input type="text" class="form-control" placeholder="Observaciones respecto a la emision (opcional)">
            </div>-->
            <!--<div class="form-group col-md-6">
              <label for="">Tipo de pago</label> 
              <select type="text" class="form-control">
                <option value="">Efectivo</option>
                <option value="" selected>Credito</option>
              </select>
            </div>-->
          </div>
          <!--datos de la empresa emisora-->
          <div class="form-group col-md-4">
            <div class="card bg-secondary border-primary">
              <div class="card-header">
                <div class="card-title">
                  <h5><?php echo $_SESSION["nombreEmpresa"];?></h5>
                </div>
              </div>
              <div class="card-body">
                <!--<p><b>NIT: </b><?php// echo $_SESSION["nitRucEmpresa"];?></p>
                <p><b>Dir: </b><?php// echo $_SESSION["direccionEmpresa"];?></p>
                <p><b>Telf: </b><?php// echo $_SESSION["telefonoEmpresa"];?></p>-->
                
                  <div class="form-group col-md-12" >
              <label for="">Email Cliente</label> 
              <input type="text" class="form-control" placeholder="Sale de la API">
            </div>
             <div class="form-group col-md-12">
    <label for="inputPassword" class="col-md-6 col-form-label">Password</label>
    <div class="col-md-6">
      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
  </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- Agregar productos -->
    <div class="card">
      <div class="card-body">
        <form action="" class="row" id="formDetalle">
          <div class="form-group col-md-2">
            <label for="">Codigo</label>
            <div class="input-group" >
              <input type="text" class="form-control" placeholder="IPROD.COD">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">
                  <i class="fas fa-search">  
                  </i>
                </button>
              </div>
            </div>
          </div>
          <div class="form-group col-md-2">
            <label for="">Concepto</label>
            <input type="number" class="form-control" id="ConcProducto" name="ConcProducto" placeholder="IPROD.Nombre">
          </div>
          <div class="form-group col-md-1">
            <label for="">Cantidad</label>
            <input type="number" class="form-control" id="CantProducto" name="CantProducto" placeholder="Entra a FFACTURA.Cantidad">
          </div>
          <div class="form-group col-md-2">
            <label for="">Unidad de Medida</label>
            <input type="number" class="form-control" id="UniMedProducto" name="UniMedProducto" placeholder="Entra a FFACTURA.Unidad">
          </div>
          <div class="form-group col-md-1">
            <label for="">P. Unitario</label>
            <input type="text" class="form-control" id="PreUnitario" name="PreUnitario" placeholder="Entra a FFACTURA.Precio">
          </div>
          <div class="form-group col-md-1">
            <label for="">Descuento</label>
            <input type="text" class="form-control" id="Descuento" name="Descuento" placeholder="FFACTURA.descuento">
          </div>
          <div class="form-group col-md-1">
            <label for="">Lote</label>
            <input type="text" class="form-control" id="LoteProd" name="LoteProd" placeholder="FFACTURA.Lote">     
          </div>
          <div class="form-group col-md-1">
            <label for="">P. Total</label>
            <input type="text" class="form-control" id="PreTotal" name="PreTotal" readonly placeholder="FFACTURA.Total">     
          </div>
          <div class="form-group col-md-1">
            <label for="">&nbsp;</label>
            <button type="button" class="btn btn-info btn-circle form-control" onclick="agregarCarrito()">
              <i class="fas fa-plus"></i>
            </button>
          </div>
        </form>
      </div>
      <div class="card-footer">
        <button class="btn btn-success">Guardar</button>
      </div>
    </div>

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
