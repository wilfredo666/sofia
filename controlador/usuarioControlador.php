<?php 
class ControladorUsuario{

  /*==================
  acceso al sistema
  ===================*/

  static public function ctrIngresoUsuario(){

    if(isset($_POST["ingUsuario"])){

      if(preg_match('/^[a-zA-Z0-9]+$/',$_POST["ingUsuario"]) && preg_match('/^[a-zA-Z0-9]+$/',$_POST["ingPassword"])){

        $ipServidor=trim($_POST["ipServidor"]);
        $bdServidor=trim($_POST["bdServidor"]);

        $_SESSION["iniciarSesion"]="ok";


        echo '<script>
                    window.location="inicio";
                </script>';


      }else{
        echo '
          <br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>
          ';
      }
    }

  }

}