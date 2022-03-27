<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand border-primary" style="background-color: #f2f2f2;">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="https://www.sofiasys.biz/" class="nav-link">Contactanos</a>
        </li>
        <!--estado para saber si esta conectado a impuestos-->
        <li class="nav-item nav-link">
          <span class="badge badge-success">Conectado</span>

        </li>
        <li class="nav-item nav-link">
          <b>BD:</b> <?php echo $_SESSION["bdServidor"];?>
        </li>
        <li class="nav-item nav-link">
          <b>Servidor:</b><?php echo $_SESSION["ipServer"];?>
        </li>
        <li class="nav-item nav-link">
          <b>Entidad:</b><?php echo $_SESSION["nombreEmpresa"];?>
        </li>
        <li class="nav-item nav-link">
          <b>NIT:</b><?php echo $_SESSION["nitRucEmpresa"];?>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">         
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

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="assest/img/user_default.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Usuario: <?php echo $_SESSION["ingUsuario"];?></a>
            <span class="text-primary"><?php echo $_SESSION["nombreUsuario"]." ".$_SESSION["apellidoUsuario"];?></span>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

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