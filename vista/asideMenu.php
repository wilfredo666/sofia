
<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="https://www.sofiasys.biz/" class="nav-link">Contactanos</a>
        </li>
        
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
         
         <button type="submit" class="btn btn-block bg-gradient-secondary btn-lg" disabled name="BtnEstlinea" id="BtnEstLinea" align="right">Estado de Linea</button>
            <!-- btn btn-block bg-gradient-success btn-sm /////para cuando este en linea-->
            <!-- class="btn btn-block bg-gradient-danger btn-lg" /////para cuando no haya conexion-->
            <!-- class="btn btn-block bg-gradient-secondary btn-lg" /////Boton sin estado de linea-->
            <script type="text/javascript">
              //document.getElementById("BtnEstLinea")
              function hasConnection(){
              exec("ping -c 1 google.com", $output, $result);
              return ($result===0) ? TRUE : FALSE;
              }  
              a=1;
              b=2;  
              if(a<b)
              {
                 alert("valor 1");
                 Document.getElementById("BtnEstLinea").className = "btn btn-block bg-gradient-success btn-sm";
                // element.classList.replace('old', 'new');
              } else{
                alert("valor 2");
                Document.getElementById("BtnEstLinea").className = "btn btn-block bg-gradient-danger btn-lg";
              }
              //document.getElementById("MyElement").className = "MyClass";

            </script>
        
         
         
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="assest/img/Logo-Sofia-1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Sistema - SOFIA</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="#" class="nav-link user-panel mt-3 pb-3 mb-3 d-flex">
               <div class="image">
                   <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDqE7wlK37hOSQyAkpTguMB862B57ll0h1E94eijXdd2n6Sao5Hq-71TLspvFso17eSiE&usqp=CAU" class="img-circle elevation-2" alt="user image">
               </div>
               <div class="info">
                   <i class=" "></i>
                  Usuario
               </div>
                
              </a>
            </li>
             <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-credit-card"></i>
                <p>
                  Ventas
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="RepVentas" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Registro de ventas</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="FormFactura" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Nueva Venta</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Clientes
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="VCliente" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lista de Clientes</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="FormRegCliente" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Nuevo Cliente</p>
                  </a>
                </li>
              </ul>
            </li>
              <li class="nav-item">     
              <a href="#" class="nav-link">
                <i class="nav-icon fas fal fa-people-carry"></i>
                <p>
                  Proveedores
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="VProveedor" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lista de Proveedores</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="FormRegProveedor" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Nuevo Proveedor</p>
                  </a>
                </li>
              </ul>
            </li>
              <li class="nav-item">       
              <a href="#" class="nav-link">
                <i class="nav-icon fas fal fa-boxes"></i>
                <p>
                  Productos
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="VProducto" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lista de Productos</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="FormRegProducto" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Nuevo Producto</p>
                  </a>
                </li>
              </ul>
            </li>              
            <li class="nav-item">
              <a href="salir" class="nav-link">
                <i class="nav-icon fas fa-door-open"></i>
                <p>
                  Salir
                </p>
              </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>