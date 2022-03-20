
<body class="hold-transition login-page">

  <div class="login-box">
    <div class="login-logo">
      <img src="assest/img/Logo-Sofia-1.png" style="width:150px;">
    </div>

    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Ingresar al sistema</p>

        <form action="" method="post" id="formulario">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
              
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Servidor" name="ipServidor" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-server"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Base de datos" name="bdServidor" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-database"></span>
              </div>
            </div>
          </div>
          <div class="row">

            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Acceso</button>
            </div>
          </div>
          <?php 
            
          $login=new ControladorUsuario();
          $login->ctrIngresoUsuario();
  
          ?>

        </form>

      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="assest/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="assest/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="assest/dist/js/adminlte.min.js"></script>
  <!--probando-->
  <!--<script src="prueba.js"></script>-->
</body>
</html>
