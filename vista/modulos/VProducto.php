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
              <h3 class="card-title">Productos</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="DataTableVentas" class="table table-bordered table-hover">
                <thead>

                  <tr>
                    <th>Cod</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Proveedor</th>
                    <th>
                      <button class="btn btn-primary" onclick="">Nuevo Producto</button> <!--aun falta reemplazar el on click-->
                    </th>
                  </tr>
                </thead>
                <tbody>
                 
                 <?php 
                  $productos=controladorProducto::ctrMostrarProductos();
                  
                  foreach($productos as $key => $value){
                    
                  ?>
                  <tr>
                    <td><?php echo $value["COD"];?></td>
                    <td><?php echo $value["NOMBRE"];?></td>
                    <td><?php echo $value["MARCA"];?></td>
                    <td><?php echo $value["PROVEEDOR"];?></td></td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerProducto(<?php echo $value["COD"];?>);"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-warning" onclick="EditProducto(<?php echo $value["COD"];?>);"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliProducto(<?php echo $value["COD"];?>);"><i class="fa fa-times"></i></button>
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