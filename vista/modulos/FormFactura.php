<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">

  </section>
  <div class="modal fade show" id="modal-lg"  aria-modal="true" role="dialog">

    <div class="modal-dialog modal-lg">


      <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title">Metodos de pago</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">X</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container Fluid">
            <div class="row">
              <div class="form-group col-md-3" >
                <label for="" class="align-middle">Efectivo</label>
                <select type="text" class="form-control">
                  <option value="EfectivoEjemplo1">1|Bolivianos</option>
                  <option value="Efectivojemplo2">2|Dolares</option>
                </select> 
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio" checked="checked">
                  <label for="customRadio1" class="custom-control-label" >Confirmar Opcion</label>

                </div>  
              </div>  
              <div class="form-group col-md-3">
                <label for="">Gift Card</label>
                <select type="text" class="form-control">
                  <option value="GiftCardEjemplo2">1|Google</option>
                  <option value="GiftCardEjemplo3">2|Blizzard</option>
                </select> 
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio">
                  <label for="customRadio2" class="custom-control-label">Confirmar Opcion</label>
                </div>      
              </div>
              <div class="form-group col-md-3">
                <label for="">Tarjeta</label>
                <select type="text" class="form-control">
                  <option value="TarjetaEjemplo2">1|Credito</option>
                  <option value="TarjetaEjemplo3">2|Debito</option>
                </select> 
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" type="radio" id="customRadio3" name="customRadio">
                  <label for="customRadio3" class="custom-control-label">Confirmar Opcion</label>
                </div>      
              </div>
              <div class="form-group col-md-3">
                <label for="">Otros</label>
                <select type="text" class="form-control">
                  <option value="OtrosEjemplo2">1|Billetera - Movil</option>
                  <option value="OtrosEjemplo3">2|Billetera - Pago Movil</option>
                  <option value="OtrosEjemplo4">3|Canal de Pago</option>
                  <option value="OtrosEjemplo5">4|Canal de Pago - Billetera</option>
                  <option value="OtrosEjemplo6">5|Canal de Pago - Billetera - Pago Online</option>
                  <option value="OtrosEjemplo7">6|Canal de Pago Pago Online</option>
                  <option value="OtrosEjemplo8">7|Cheque</option>
                  <option value="OtrosEjemplo9">8|Cheque - Billetera</option>
                  <option value="OtrosEjemplo10">9|Cheque - Billetera - Pago Online</option>
                </select> 
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" type="radio" id="customRadio4" name="customRadio">
                  <label for="customRadio4" class="custom-control-label">Confirmar Opcion</label>
                </div>          
              </div>
            </div>
          </div>                              
        </div>
        <div class="modal-footer align-right">
          <button type="button" class="btn btn-primary btn-block close" data-dismiss="modal">
            Enviar
          </button>
        </div>

      </div>
    </div>
  </div>
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

      <div class="card-body">
        <form action="" class="row">
          <div class="form-group row col-md-9">
            <div class="form-group col-md-3">
              <label for="">Fecha</label>
              <?php date_default_timezone_set('America/La_Paz');?> 
              <input type="text" class="form-control" name="fechaFactura" id="fechaFactura" value="<?php echo date("d-m-Y");?>" disabled>
            </div>  

            <?php 
            $sucursal=controladorVenta::crtInfoSucursal();
            ?>
            <div class="form-group col-md-3">
              <label for="">Sucursal</label>
              <select name="facSucursal" id="facSucursal" class="form-control">
                <option>Seleccionar</option>
                <?php 
                foreach($sucursal as $value){
                ?>
                <option value="<?php echo $value["NUM"];?>"><?php echo $value["NUM"]."|".$value["NOMBRE"];?></option>
                <?php
                }
                ?>
              </select>
              <p id="error-facSucursal" class="text-danger"></p> 
            </div>
            <div class="form-group col-md-3">
              <label for="">Punto de Venta</label>
              <?php 
              $pntVenta=controladorVenta::crtInfoPuntoVenta();
              ?>
              <select name="pntVenta" id="pntVenta" class="form-control">
                <option>Seleccionar</option>
                <option value="0">Casa Matriz</option>
                <?php 
                foreach($pntVenta as $value){
                ?>
                <option value="<?php echo $value["CODIGO"];?>"><?php echo $value["NOMBRE"];?></option>
                <?php
                }
                ?>
              </select>
              <p id="error-pntVenta" class="text-danger"></p> 
            </div>
            <div class="form-group col-md-3">
              <label for="">Tipo de Factura</label>
              <select name="tpFactura" id="tpFactura" class="form-control">
                <option value="1">Compra y venta</option>
              </select>
            </div>


            <div class="form-group col-md-6">
              <label for="">E-mail</label> 
              <input type="email" class="form-control" placeholder="E-mail Cliente" id="RSClienteEmail" name="RSClienteEmail">
              <p id="error-email" class="text-danger"></p> 
            </div>
            <div class="form-group col-md-6">
              <label for="">Tipo de documento</label> 
              <div class="input-group">
                <select class="form-control" name="tpDocumento" id="tpDocumento" onchange="tipoDocumento()">
                  <option>Seleccionar</option>
                  <option value="1">CEDULA DE IDENTIDAD</option>
                  <option value="2">CEDULA DE IDENTIDAD DE EXTRANJERO</option>
                  <option value="3">PASAPORTE</option>
                  <option value="4">OTRO DOCUMENTO DE IDENTIDAD</option>
                  <option value="5">NÚMERO DE IDENTIFICACIÓN TRIBUTARIA</option>
                </select>
              </div>
              <p id="error-tpDocumento" class="text-danger"></p> 
            </div>
            <div class="form-group col-md-6">
              <label for="">NIT/CI</label> 
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Ingrese el NIT/CI del cliente" id="nitCliente" name="nitCliente">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button" onclick="busCliente()">
                    <i class="fas fa-search">  
                    </i>
                  </button>
                </div>
              </div>
              <p id="error-nitCliente" class="text-danger"></p>
            </div>

            <div class="form-group col-md-6">
              <label for="">Nombre o Razon social</label> 
              <div class="input-group">
                <input type="text" class="form-control" id="RSCliente" placeholder="Razon Social del cliente">
                <input type="hidden" id="CodCliente">
              </div>
              <p id="error-rs" class="text-danger"></p>
            </div>
            <?php 
            $actividad=controladorVenta::crtInfoActividad();
            ?>
            <div class="form-group col-md-6">
              <label for="">Actividad Economica</label>
              <select name="ActividadEco" id="ActividadEco" class="form-control">
                <option value="0">Seleccionar</option>
                <?php 
                foreach($actividad as $value){
                ?>
                <option value="<?php echo $value["COD"];?>"><?php echo $value["COD"]."|".$value["ACTECON"];?></option>
                <?php
                }
                ?>
              </select>
              <p id="error-ActividadEco" class="text-danger"></p>
            </div>

            <div class="form-group col-md-6" id="card-exepcion">

            </div>
          </div>

          <div class="form-group col-md-3">
            <div class="card" style="background-color: #f2f2f2;">
              <div class="input-group sm-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">Subtotal</span>
                </div>
                <input type="text" style="text-align:right;" class="form-control CurrencyInput"  readonly value="0.00" id="SubTotal" name="SubTotal">
              </div>
              <div class="input-group sm-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">Descuento Adicional</span>
                </div>
                <input type="text" style="text-align:right;" class="form-control CurrencyInput" value="0.00" id="descAdicional" name="descAdicional" onkeyup="calcularTotal()">
              </div>
              <div class="input-group sm-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">Total</span>
                </div>
                <input type="text" style="text-align:right;" class="form-control CurrencyInput" readonly value="0.00" id="totApagar" name="totApagar">
              </div>

              <input type="hidden" value="0.00" id="totDescuento" name="totDescuento">

              <div class="card-footer">

                <label for="">Metodo de pago</label> 
                <div class="input-group">
                  <select class="form-control" name="metPago" id="metPago">
                    <option>Seleccionar</option>
                    <option value="1">Efectivo</option>
                    <option value="2">Tarjeta</option>
                    <option value="3">GifCard</option>
                  </select>

                </div>
                <!--<button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#modal-lg">
<i class="fas fa-hand-holding-usd"></i>
Metodo de Pago
</button>-->
             <p id="error-metPago" class="text-danger"></p>
              </div>
            </div>
            <div class="callout callout-info direct-chat-messages" style="height:100px;">
              <span class="list-unstyled" id="panelInfo"></span>
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
            <label for="">Cod. Producto</label>
            <div class="input-group form-group" >
              <input type="text" class="form-control" placeholder="Cod. Producto" id="codigoProducto">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" onclick="busCod()">
                  <i class="fas fa-search">  
                  </i>
                </button>
              </div>
            </div>
            <input type="hidden" class="form-control" id="actEcoProducto">
            <input type="hidden" class="form-control" id="codProdSin">
          </div>
          <div class="form-group col-md-4">
            <label for="">Concepto</label>
            <input type="text" class="form-control" id="ConcProducto">
            <p id="error-ActEcoProd" class="text-danger"></p>
          </div>
          <div class="form-group col-md-1">
            <label for="">Cantidad</label>
            <input type="number" class="form-control" id="CantProducto" name="CantProducto" oninput="calculate()" value="1"><!--Entra a FFACTURA.Cantidad-->
          </div>
          <div class="form-group col-md-1">
            <label for="">U.Medida</label>
            <input type="text" class="form-control" id="UniMedProducto" name="UniMedProducto" readonly>
          </div>
          <div class="form-group col-md-1">
            <label for="">P. Unit</label>
            <input type="text" class="form-control CurrencyInput" id="PreUnitario" name="PreUnitario" placeholder="Precio" oninput="calculate()" value="0.00">
          </div>
          <div class="form-group col-md-1">
            <label for="">Descuento</label>
            <input type="text" class="form-control" id="DescProducto" name="Descuento"  oninput="calculate()" value="0.00"><!--Entra a FFACTURA.descuento-->
          </div>
          <!--<div class="form-group col-md-1">
<label for="">Lote</label>
<input type="text" class="form-control" id="LoteProd" name="LoteProd">  FFACTURA.Lote   
</div>-->
          <div class="form-group col-md-1">
            <label for="">P. Total</label>
            <input type="text" class="form-control CurrencyInput" id="PreTotal" name="PreTotal" readonly value="0.00">  <!--FFACTURA.Total  --> 
          </div>
          <div class="form-group col-md-1">
            <label for="">&nbsp;</label>
            <button type="button" class="btn btn-info btn-circle form-control" onclick="agregarCarrito()" id="btnAgregarCarr" disabled>
              <i class="fas fa-plus"></i>
            </button>
          </div>
        </form>
      </div>
      <div class="card-footer">
        <button class="btn btn-success" onclick="emitirFactura()">Guardar</button>
      </div>
    </div>

    <!-- Lista de productos -->
    <div class="card">
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th>Descricion</th>
              <th>Cantidad</th>
              <th>P. Unitario</th>
              <th>Descuento</th>
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
