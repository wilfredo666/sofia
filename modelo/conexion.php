<?php

class Conexion{
  static public function conectar(){
    $host="firebird:dbname=localhost:demo";
    $user="SOFIASYS";
    $pass="S0f1a+";

    $link= new PDO($host,$user,$pass);
    return $link;
  }
}

?>