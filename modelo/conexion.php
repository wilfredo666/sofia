<?php
session_start();
class Conexion{
  static public function conectar(){

    /*echo $_SESSION["ipServer"];
    echo $_SESSION["ingUsuario"];
    echo $_SESSION["ingPassword"];
    echo $_SESSION["bdServidor"];*/

    /*$host="firebird:dbname=localhost:demo";
    $user="SOFIASYS";
    $pass="S0f1a+";*/
    
    $host="firebird:dbname=".$_SESSION["ipServer"].":".$_SESSION["bdServidor"];
    $user=$_SESSION["ingUsuario"];
    $pass=$_SESSION["ingPassword"];

    $link= new PDO($host,$user,$pass);
    return $link;

    /*usuario=SOFIASYS
    password=S0f1a+
    ip=localhost
    bd=demo*/

  }
}

?>
