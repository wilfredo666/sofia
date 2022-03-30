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

        $host="firebird:dbname=".$ipServer.":".$bd;

        //verificando la conexion a nivel de base de datos
        try{
          $link=new PDO($host, $user, $pass);

          $_SESSION["iniciarSesion"]="ok";
          
          //almaceneando las credeneciales de acceso
          $_SESSION["ipServer"]=$ipServer;
          $_SESSION["ingUsuario"]=$user;
          $_SESSION["ingPassword"]=$pass;
          $_SESSION["bdServidor"]=$bd;

          //capturando los datos de usuario
          $sql="select * from REG_PERS WHERE COD='$user'";
          $query=$link->query($sql);
          $usuario=$query->fetch();

          $_SESSION["nombreUsuario"]=$usuario["NOMBRES"];
          $_SESSION["apellidoUsuario"]=$usuario["APELLIDOS"];
          
          //capturando los datos de la empresa
          $sql="select NOMBRE, NIT_RUC, DIRECCION, TELEFONO from EMPRESA";
          $query=$link->query($sql);
          $empresa=$query->fetch();
          
          
          $_SESSION["nombreEmpresa"]=$empresa["NOMBRE"];
          $_SESSION["nitRucEmpresa"]=$empresa["NIT_RUC"];
          $_SESSION["direccionEmpresa"]=$empresa["DIRECCION"];
          $_SESSION["telefonoEmpresa"]=$empresa["TELEFONO"];
          
          
          //capturando el token de conexion
          $sql="select CODSISTEMA, TOKEN from FAUTSIS";
          $query=$link->query($sql);
          $siat=$query->fetch();
          
          $_SESSION["codsistema"]=$siat["CODSISTEMA"];
          $_SESSION["token"]=$siat["TOKEN"];
          
          
          echo '<script>
                    window.location="inicio";
                </script>';

        }catch(Exception $ex){
          echo '
          <br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>
          ';
          exit();
        }

      }else{
        echo '
          <br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>
          ';
      }
    }

  }

}