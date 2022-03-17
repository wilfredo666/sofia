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
              <h3 class="card-title">Clientes</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="DataTableClientes" class="table table-bordered table-hover">
                <thead>

                  <tr>
                    <th>Cod</th>
                    <th>NIT</th>
                    <th>Razon S.</th>
                    <th>Nombre(s)</th>
                    <th>Dirección</th>
                    <th>
                      <button class="btn btn-primary" onclick="FNuevoCliente();">Nuevo Cliente</button>
                    </th>
                  </tr>
                </thead>
                <tbody>
                 
                 <?php 
                  $clientes=controladorCliente::ctrMostrarClientes();
                  
                  foreach($clientes as $key => $value){
                    
                  ?>
                  <tr>
                    <td><?php echo $value["COD"];?></td>
                    <td><?php echo $value["NIT"];?></td>
                    <td><?php echo $value["RAZON"];?></td>
                    <td><?php echo $value["NOMBRE"]." ".$value["APELLIDO"];?></td>
                    <td><?php echo $value["DIRECCION"];?></td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerCliente(<?php echo $value["COD"];?>);"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-warning" onclick="EditCliente(<?php echo $value["COD"];?>);"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliCliente(<?php echo $value["COD"];?>);"><i class="fa fa-times"></i></button>
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