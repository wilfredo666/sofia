<?php
$base_url= "http://localhost/sofia/";


$host="200.58.77.126:demo";

$user="SGW99";
$pass="WilS4";

//$conn=new PDO($host,$user,$pass);
$con=ibase_connect($host,$user,$pass);

if(!$con){
  echo "Acceso incorrecto";
  exit;
}
?>