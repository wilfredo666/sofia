<?php

class Conexion{
  static public function conectar(){
    $host="firebird:dbname=209.126.4.196:demo";
    $db="demo";
    $user="SOFIASYS";
    $pass="S0f1a+";

    $link= new PDO($host,$user,$pass);
    return $link;
  }
}

?>