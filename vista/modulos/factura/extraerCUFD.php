<?php 
//extrayendo el cudf maximo
$sql="SELECT * FROM FCUFD where fecha=(select max(fecha) FROM FCUFD)";
$query=$link->query($sql);
$cufd=$query->fetch();

?>
