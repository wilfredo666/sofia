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
                    <th>Total</th>
                    <th>
                      <button class="btn btn-primary" onclick="MNuevaVenta();">Nueva Venta</button>
                    </th>
                  </tr>
                </thead>
                <tbody>
                
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