
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
                      <button class="btn btn-primary" data-toggle="modal" onclick="MNuevaVenta();">Nueva Venta</button>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01238</td>
                    <td>Alberto Apaza</td>
                    <td>Usr. Mir01</td>
                    <td>15-02-2022</td>
                    <td>Emitido</td>
                    <td>2099.90</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>25876</td>
                    <td>Maria Soledad</td>
                    <td>Usr. Mir02</td>
                    <td>20-03-2022</td>
                    <td>Pendiente</td>
                    <td>3998.00</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>03597</td>
                    <td>Carvajar Ariel</td>
                    <td>Usr. Mir03</td>
                    <td>01-03-2022</td>
                    <td>Emitido</td>
                    <td>1500.80</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>01238</td>
                    <td>Alberto Apaza</td>
                    <td>Usr. Mir01</td>
                    <td>15-02-2022</td>
                    <td>Emitido</td>
                    <td>2099.90</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>25876</td>
                    <td>Maria Soledad</td>
                    <td>Usr. Mir02</td>
                    <td>20-03-2022</td>
                    <td>Pendiente</td>
                    <td>3998.00</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>03597</td>
                    <td>Carvajar Ariel</td>
                    <td>Usr. Mir03</td>
                    <td>01-03-2022</td>
                    <td>Emitido</td>
                    <td>1500.80</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>01238</td>
                    <td>Alberto Apaza</td>
                    <td>Usr. Mir01</td>
                    <td>15-02-2022</td>
                    <td>Emitido</td>
                    <td>2099.90</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>25876</td>
                    <td>Maria Soledad</td>
                    <td>Usr. Mir02</td>
                    <td>20-03-2022</td>
                    <td>Pendiente</td>
                    <td>3998.00</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>03597</td>
                    <td>Carvajar Ariel</td>
                    <td>Usr. Mir03</td>
                    <td>01-03-2022</td>
                    <td>Emitido</td>
                    <td>1500.80</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>01238</td>
                    <td>Alberto Apaza</td>
                    <td>Usr. Mir01</td>
                    <td>15-02-2022</td>
                    <td>Emitido</td>
                    <td>2099.90</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>25876</td>
                    <td>Maria Soledad</td>
                    <td>Usr. Mir02</td>
                    <td>20-03-2022</td>
                    <td>Pendiente</td>
                    <td>3998.00</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>03597</td>
                    <td>Carvajar Ariel</td>
                    <td>Usr. Mir03</td>
                    <td>01-03-2022</td>
                    <td>Emitido</td>
                    <td>1500.80</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>01238</td>
                    <td>Alberto Apaza</td>
                    <td>Usr. Mir01</td>
                    <td>15-02-2022</td>
                    <td>Emitido</td>
                    <td>2099.90</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>25876</td>
                    <td>Maria Soledad</td>
                    <td>Usr. Mir02</td>
                    <td>20-03-2022</td>
                    <td>Pendiente</td>
                    <td>3998.00</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>03597</td>
                    <td>Carvajar Ariel</td>
                    <td>Usr. Mir03</td>
                    <td>01-03-2022</td>
                    <td>Emitido</td>
                    <td>1500.80</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>01238</td>
                    <td>Alberto Apaza</td>
                    <td>Usr. Mir01</td>
                    <td>15-02-2022</td>
                    <td>Emitido</td>
                    <td>2099.90</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>25876</td>
                    <td>Maria Soledad</td>
                    <td>Usr. Mir02</td>
                    <td>20-03-2022</td>
                    <td>Pendiente</td>
                    <td>3998.00</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>03597</td>
                    <td>Carvajar Ariel</td>
                    <td>Usr. Mir03</td>
                    <td>01-03-2022</td>
                    <td>Emitido</td>
                    <td>1500.80</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>01238</td>
                    <td>Alberto Apaza</td>
                    <td>Usr. Mir01</td>
                    <td>15-02-2022</td>
                    <td>Emitido</td>
                    <td>2099.90</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>25876</td>
                    <td>Maria Soledad</td>
                    <td>Usr. Mir02</td>
                    <td>20-03-2022</td>
                    <td>Pendiente</td>
                    <td>3998.00</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>03597</td>
                    <td>Carvajar Ariel</td>
                    <td>Usr. Mir03</td>
                    <td>01-03-2022</td>
                    <td>Emitido</td>
                    <td>1500.80</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>01238</td>
                    <td>Alberto Apaza</td>
                    <td>Usr. Mir01</td>
                    <td>15-02-2022</td>
                    <td>Emitido</td>
                    <td>2099.90</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>25876</td>
                    <td>Maria Soledad</td>
                    <td>Usr. Mir02</td>
                    <td>20-03-2022</td>
                    <td>Pendiente</td>
                    <td>3998.00</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>03597</td>
                    <td>Carvajar Ariel</td>
                    <td>Usr. Mir03</td>
                    <td>01-03-2022</td>
                    <td>Emitido</td>
                    <td>1500.80</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>01238</td>
                    <td>Alberto Apaza</td>
                    <td>Usr. Mir01</td>
                    <td>15-02-2022</td>
                    <td>Emitido</td>
                    <td>2099.90</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>25876</td>
                    <td>Maria Soledad</td>
                    <td>Usr. Mir02</td>
                    <td>20-03-2022</td>
                    <td>Pendiente</td>
                    <td>3998.00</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>03597</td>
                    <td>Carvajar Ariel</td>
                    <td>Usr. Mir03</td>
                    <td>01-03-2022</td>
                    <td>Emitido</td>
                    <td>1500.80</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>01238</td>
                    <td>Alberto Apaza</td>
                    <td>Usr. Mir01</td>
                    <td>15-02-2022</td>
                    <td>Emitido</td>
                    <td>2099.90</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>25876</td>
                    <td>Maria Soledad</td>
                    <td>Usr. Mir02</td>
                    <td>20-03-2022</td>
                    <td>Pendiente</td>
                    <td>3998.00</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>03597</td>
                    <td>Carvajar Ariel</td>
                    <td>Usr. Mir03</td>
                    <td>01-03-2022</td>
                    <td>Emitido</td>
                    <td>1500.80</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>01238</td>
                    <td>Alberto Apaza</td>
                    <td>Usr. Mir01</td>
                    <td>15-02-2022</td>
                    <td>Emitido</td>
                    <td>2099.90</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>25876</td>
                    <td>Maria Soledad</td>
                    <td>Usr. Mir02</td>
                    <td>20-03-2022</td>
                    <td>Pendiente</td>
                    <td>3998.00</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>03597</td>
                    <td>Carvajar Ariel</td>
                    <td>Usr. Mir03</td>
                    <td>01-03-2022</td>
                    <td>Emitido</td>
                    <td>1500.80</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-info" onclick="MVerVenta();"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary"><i class="fa fa-print"></i></button>   
                        <button class="btn btn-warning" onclick="MEditVenta();"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" onclick="MEliVenta();"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>

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