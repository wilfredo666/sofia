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
                        <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio">
                        <label for="customRadio1" class="custom-control-label">Confirmar Opcion</label>
                        
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

      <!--ref.: ffcontrol.pdf-->
      <div class="card-body">
        <form action="" class="row">
          <div class="form-group row col-md-8">
            <div class="form-group col-md-2">
              <label for="">Fecha</label> 
              <input type="text" class="form-control" value="<?php echo date("d-m-Y");?>" disabled>
            </div>
            
            <?php 
            $sucursal=controladorVenta::crtInfoSucursal();
            ?>
            <div class="form-group col-md-3">
              <label for="">Sucursal</label>
              <select name="" id="" class="form-control">
                <option value="null">Seleccionar</option>
                <?php 
                foreach($sucursal as $value){
                  ?>
                  <option value="<?php echo $value["NUM"];?>"><?php echo $value["NUM"]."|".$value["NOMBRE"];?></option>
                  <?php
                }
                ?>
              </select> 
            </div>
            <div class="form-group col-md-3">
              <label for="">Punto de Venta</label>
              <input type="text" class="form-control" placeholder="Esta en Pendiente">
            </div>
            <div class="form-group col-md-3">
              <label for="">Tipo de Factura</label>
              <input type="text" class="form-control" placeholder="Sale de la API" onkeyup="busCliente">
            </div>

            <div class="form-group col-md-7">
              <label for="">Actividad</label> 
              <input type="text" class="form-control" placeholder="Sale de la API">
            </div>
            <div class="form-group col-md-4">
              <label for="">Email</label> 
              <input type="text" class="form-control" placeholder="LCLI.email" id="RSClienteEmail">
            </div>
            <div class="form-group col-md-4">
              <label for="">NIT</label> 
              <div class="input-group">
                <input type="text" class="form-control" placeholder="LCLI.NIT" id="nitCliente">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button" onclick="busCliente()">
                    <i class="fas fa-search">  
                    </i>
                  </button>
                </div>

              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="">Nombre o Razon social</label> 
              <div class="input-group">
                <input type="text" class="form-control" id="RSCliente" placeholder="LCLI.razon'validar con API' devuelve por API">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fas fa-search">  
                    </i>
                  </button>
                </div>
              </div>
            </div>

          </div>

          <!--datos de la empresa emisora-->
          <div class="form-group col-md-4">
            <div class="card" style="background-color: #f2f2f2;">
                <div class="input-group sm-3">
                 <div class="input-group-prepend">
                   <span class="input-group-text">Subtotal</span>
                 </div>
                  <input type="text" style="text-align:right;" class="form-control" id="" placeholder="Subtotal Bs.">
                </div>
                <div class="input-group sm-3">
                 <div class="input-group-prepend">
                   <span class="input-group-text">Descuento</span>
                 </div>
                  <input type="text" style="text-align:right;" class="form-control" id="" placeholder="Descuento Bs.">
                </div>
                <div class="input-group sm-3">
                 <div class="input-group-prepend">
                   <span class="input-group-text">Total</span>
                 </div>
                  <input type="text" style="text-align:right;" class="form-control" id="" placeholder="Total">
                </div>
                <button type="button" class="btn btn-primary btn-block">
                    <i class="fas fa-plus"></i>
                    Boton descuento
                </button>
                <div class="form-group sm-3">
              <!--<label for="" class="mt-0">Metodo de pago</label>--> 
            </div>
                 <div class="card-footer">
             <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#modal-lg">
                    <i class="fas fa-hand-holding-usd"></i>
                    Metodo de Pago
                </button>
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
            <div class="input-group form-group" >
              <input type="text" class="form-control" placeholder="IPRODUCTO.COD" id="codigoProducto">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" onclick="busCod()">
                  <i class="fas fa-search">  
                  </i>
                </button>
              </div>
            </div>
          </div>
          <div class="form-group col-md-2">
            <label for="">Concepto</label>
            <input type="text" class="form-control" id="ConcProducto" placeholder="IPROD.Nombre">
          </div>
          <div class="form-group col-md-1">
            <label for="">Cantidad</label>
            <input type="number" class="form-control" id="CantProducto" name="CantProducto" placeholder="Entra a FFACTURA.Cantidad" oninput="calculate()">
          </div>
          <div class="form-group col-md-2">
            <label for="">Unidad de Medida</label>
            <input type="number" class="form-control" id="UniMedProducto" name="UniMedProducto" placeholder="Entra a FFACTURA.Unidad">
          </div>
          <div class="form-group col-md-1">
            <label for="">P. Unit</label>
            <input type="text" class="form-control" id="PreUnitario" name="PreUnitario" placeholder="Entra a FFACTURA.Precio" oninput="calculate()">
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
