/*====================
solicitar CUFD
======================*/
function solicitudcufd(){
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

/*====================
solicitar CUIS
======================*/

function solicitudcuis(){
  var obj={
  codigoAmbiente: 2,
  codigoModalidad: 2,
  codigoPuntoVenta: 0,
  codigoPuntoVentaSpecified: true,
  codigoSistema: "71D7A7B740E994C89373447",
  codigoSucursal: 0,
  nit: 3726922011
  }
  var token="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJqd3JvYmxlcyIsImNvZGlnb1Npc3RlbWEiOiI3MUQ3QTdCNzQwRTk5NEM4OTM3MzQ0NyIsIm5pdCI6Ikg0c0lBQUFBQUFBQUFETTJOekt6TkRJeU1EUUVBSTlYR3pjS0FBQUEiLCJpZCI6NzEwNTQ5LCJleHAiOjE2NzUzODI0MDAsImlhdCI6MTY0Mzk0NTI1Niwibml0RGVsZWdhZG8iOjM3MjY5MjIwMTEsInN1YnNpc3RlbWEiOiJTRkUifQ.nS8t-EDaBi-e3PGtnbnTI-7PKPy_6Kia1zFPKdzZgDnZ6VfXlimlrTsEgTb8_iDKoJ7Hy-vLw_0o_vgpLqSltA"
  $.ajax(
    {
      type:"POST",
      url:"https://localhost:5001/api/Codigos/solicitudcuis?token="+token,
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