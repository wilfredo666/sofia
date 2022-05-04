<?php
//capturando la url y el metodo
$ruta=parse_url($_SERVER['REQUEST_URI']);
if(isset($ruta["query"])){
  $metodo=$ruta["query"];
  $pruebaClase=new pruebaClase($metodo);
}else{
  echo "no existe";
}


/*ingresa directamente al metodo contructor*/
//$pruebaClase=new pruebaClase();

/*ingresa directamente al metodo contructor y al metodo index*/
//$pruebaClase=new pruebaClase($metodo);
//$pruebaClase->index();
class pruebaClase{
  
  public function __construct($metodo){
    /*convoca al metodo*/
    //$metodo="index";
    $this->$metodo();
  }
  
  static public function index()
  {
    echo "Esto es un index";
  }

  static public function mensaje(){
    echo "hola mundo";
  }
  
}
?>