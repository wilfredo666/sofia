<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Reporte de ventas</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="DataTableVentas" class="table table-bordered table-hover">
                <thead>

                  <tr>
                    <th># Factura</th>
                    <th>Cliente</th>
                    <th>Usuario</th>
                    <th>F. Emision</th>
                    <th>Estado</th>
                    <th>Total</th>
                    <th>
                      <button class="btn btn-primary" onclick="MNuevaVenta();">Nueva Venta</button>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $clientes=controladorVenta::ctrMostrarVentas();

                  foreach($ventas as $key => $value){

                  ?>
                  <tr>
                    <td><?php echo $value["COD"];?></td>
                    <td><?php echo $value[""];?></td>
                    <td><?php echo $value[""];?></td>
                    <td><?php echo $value[""];?></td>
                    <td><?php echo $value[""];?></td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta(<?php echo $value["COD"];?>);"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary" onclick="MImpVenta(<?php echo $value["COD"];?>);"><i class="fa fa-print"></i></button>
                        <button class="btn btn-warning" onclick="MEditVenta(<?php echo $value["COD"];?>);"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta(<?php echo $value["COD"];?>);"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <?php }?>

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>

  </section>
</div>
<!-- /.content -->