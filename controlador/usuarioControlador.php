<?php 
class ControladorUsuario{

  /*==================
  acceso al sistema
  ===================*/

  static public function ctrIngresoUsuario(){

    if(isset($_POST["ingUsuario"])){

      if(preg_match('/^[a-zA-Z0-9]+$/',$_POST["ingUsuario"])){
        
        //recuperando los datos del formulario login
        $ipServer=$_POST["ipServidor"];
        $user=$_POST["ingUsuario"];
        $pass=$_POST["ingPassword"];
        $bd=$_POST["bdServidor"];

        //verificando la conexion a nivel de base de datos

        $host="firebird:dbname=".$ipServer.":".$bd;
        if(!($link=new PDO($host, $user, $pass))){
          '<script>
                    window.location="salir";
                </script>';
        }else{
          $_SESSION["iniciarSesion"]="ok";
          
          $_SESSION["ipServer"]=$ipServer;
          $_SESSION["ingUsuario"]=$user;
          $_SESSION["ingPassword"]=$pass;
          $_SESSION["bdServidor"]=$bd;
          
          echo '<script>
                    window.location="inicio";
                </script>';
        }


      }else{
        echo '
          <br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>
          ';
      }
    }

  }

}