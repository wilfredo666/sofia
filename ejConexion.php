<?php
$base_url= "http://localhost/sofia/";

$host="firebird:dbname=localhost:demo";

$user="SOFIASYS";
$pass="S0f1a+";

$con=new PDO($host,$user,$pass);

try{
  $con=new PDO($host,$user,$pass);
}catch(Exception $ex){
  echo "error: ".$ex->GetMessage();
}


$sql="select NOMBRE, NIT_RUC from EMPRESA";
$query=$con->query($sql);
$us=$query->fetch();
//var_dump($us);
/*foreach($query as $row){
 echo $row["COD"]." ".$row["NIT"]." - ".$row["RAZON"];
  echo "<br>";
}*/
?>