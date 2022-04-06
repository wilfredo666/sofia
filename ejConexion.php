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


$sql="select * from IPRODUCTO where cod='Q2G0T04205L'";
$query=$con->query($sql);
$us=$query->fetch();
var_dump($us);
/*foreach($query as $row){
 echo $row["COD"]." ".$row["NIT"]." - ".$row["RAZON"];
  echo "<br>";
}*/
?>