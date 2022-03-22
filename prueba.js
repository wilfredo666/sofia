//var formulario= document.getElementById("formulario");

/*
formulario.addEventListener('submit', function(e){
  e.preventDefault();

  //var datos= new FormData(formulario);
  var datos="ingUsuario=wilfredo&ingPassword=Slifer123"; //asi lo puede recibir en php

  fetch("prueba.php", {
    method: 'POST',
    body: datos,
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded' //con esta codificacion
    }
  }).then(res => res.text()) //con .text obtenemos en cuerpo de la respuesta prueba.php
    .catch(error => console.error('Error:', error))
    .then(response => console.log('Correcto:', response));
});
*/
/*formulario.addEventListener('submit', function(e){
  e.preventDefault();

  //var datos= new FormData(formulario);
  var datos={
    "ingUsuario":"wilfredo",
    "ingPassword":"Slifer123"
  }; //asi lo puede recibir en php

  fetch("prueba.php", {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded'
    },
    body: datos,
    cache:'no-cache'

  }).then(res => res.text()) //con .text obtenemos en cuerpo de la respuesta prueba.php
    .catch(error => console.error('Error:', error))
    .then(response => console.log('Correcto:', response));
});*/

function prueba(){
  var obj={
    codigoAmbiente: 2,
    codigoModalidad: 2,
    codigoPuntoVenta: 0,
    codigoPuntoVentaSpecified: true,
    codigoSistema: "71D7A7B740E994C89373447",
    codigoSucursal: 0,
    nit: 3726922011,
    cuis:"2E8B5B9E"
  }
  var token="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJqd3JvYmxlcyIsImNvZGlnb1Npc3RlbWEiOiI3MUQ3QTdCNzQwRTk5NEM4OTM3MzQ0NyIsIm5pdCI6Ikg0c0lBQUFBQUFBQUFETTJOekt6TkRJeU1EUUVBSTlYR3pjS0FBQUEiLCJpZCI6NzEwNTQ5LCJleHAiOjE2NzUzODI0MDAsImlhdCI6MTY0Mzk0NTI1Niwibml0RGVsZWdhZG8iOjM3MjY5MjIwMTEsInN1YnNpc3RlbWEiOiJTRkUifQ.nS8t-EDaBi-e3PGtnbnTI-7PKPy_6Kia1zFPKdzZgDnZ6VfXlimlrTsEgTb8_iDKoJ7Hy-vLw_0o_vgpLqSltA"
  $.ajax(
    {
      type:"POST",
      url:"https://localhost:5001/api/Codigos/solicitudcufd?token="+token,
      data:JSON.stringify(obj),
      cache:false,
      contentType:"application/json",
      processData:false,
      success:function(data){
        console.log(data);
      }
    }
  )

}


/*function usuarioPost(){
  var obj={
    usuario: "wilfredo",
    password: "admin123"
  }

  fetch('prueba.php',{
    method: 'POST',
    body:JSON.stringify(obj),
    headers: {
      'Content-Type': 'application/json'
    }
  }).then(res => res.json())
    .catch(error => console.error('Error:', error))
    .then(response => console.log('Success:', response));
}*/


/*const usuarioPost= async()=>{
  var obj={
    usuario: "wilfredo",
    password: "admin123"
  };
  const respuesta= await fetch('prueba.php',{
    method: 'POST',
    body:JSON.stringify(obj),
    headers: {
      'Content-Type': 'application/json'
    }
  }).then(res => res.json())
    .catch(error => console.error('Error:', error))
    .then(response => console.log('Success:', response));

  console.log(respuesta);
}

usuarioPost();*/

/*function postUser(){
  var obj={
    usuario: "wilfredo Saez",
    password: "admin123"
  };

   $.ajax(
            {
                type:"POST",
                url:"prueba.php",
                data:obj,
                cache:false,
                //contentType:false,
                //processData:false,
                success:function(data){
                    console.log(data);
                }
            }
        )
}*/