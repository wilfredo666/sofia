<?php
$base_url= "http://localhost/sofia/";

$host="firebird:dbname=localhost:demo";

$db="demo";
$user="SOFIASYS";
$pass="S0f1a+";

$conn=new PDO($host,$user,$pass);
/*$con=ibase_connect($host,$user,$pass);*/
if(!$conn){
  echo "Acceso incorrecto";
  exit;
}

$sql="select * from A6";
$query=$conn->query($sql);
$us=$query->fetch();
var_dump($us);
/*foreach($query as $row){
 echo $row["COD"]." ".$row["NIT"]." - ".$row["RAZON"];
  echo "<br>";
}*/
?>