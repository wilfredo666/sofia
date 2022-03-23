<?php
$base_url= "http://localhost/sofia/";

$host="firebird:dbname=localhost:demos";

$user="SOFIASYS";
$pass="S0f1a+";

//$con=new PDO($host,$user,$pass);
/*$con=ibase_connect($host,$user,$pass);*/
try{
  $con=new PDO($host,$user,$pass);
}catch(Exception $ex){
  echo "error: ".$ex->GetMessage();
}
/*if(!$conn){
  echo "Acceso incorrecto";
  exit;
}*/

/*$sql="select * from A6";
$query=$conn->query($sql);
$us=$query->fetch();
var_dump($us);*/
/*foreach($query as $row){
 echo $row["COD"]." ".$row["NIT"]." - ".$row["RAZON"];
  echo "<br>";
}*/
?>