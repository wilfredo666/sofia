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

/*====================
verificar nit
======================*/

function verificarNit(){
  var obj={
    codigoAmbiente: 2,
    codigoModalidad: 2,
    codigoSistema: "71D7A7B740E994C89373447",
    codigoSucursal: 0,
    cuis: "2E8B5B9E",
    nit: 3726922011,
    nitParaVerificacion: 1028529024
  }
  var token="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJqd3JvYmxlcyIsImNvZGlnb1Npc3RlbWEiOiI3MUQ3QTdCNzQwRTk5NEM4OTM3MzQ0NyIsIm5pdCI6Ikg0c0lBQUFBQUFBQUFETTJOekt6TkRJeU1EUUVBSTlYR3pjS0FBQUEiLCJpZCI6NzEwNTQ5LCJleHAiOjE2NzUzODI0MDAsImlhdCI6MTY0Mzk0NTI1Niwibml0RGVsZWdhZG8iOjM3MjY5MjIwMTEsInN1YnNpc3RlbWEiOiJTRkUifQ.nS8t-EDaBi-e3PGtnbnTI-7PKPy_6Kia1zFPKdzZgDnZ6VfXlimlrTsEgTb8_iDKoJ7Hy-vLw_0o_vgpLqSltA"
  $.ajax(
    {
      type:"POST",
      url:"https://localhost:5001/api/Codigos/verificarNit?token="+token,
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

function recepecion(){
  var obj={
    codigoAmbiente: 2,
    codigoPuntoVenta: 0,
    codigoPuntoVentaSpecified: true,
    codigoSistema: "71D7A7B740E994C89373447",
    codigoSucursal: 0,
    nit: 3726922011,
    codigoDocumentoSector: 1,
    codigoEmision: 1,
    codigoModalidad: 2,
    cufd: "BQUtCV8K/XURBNzTRDODkzNzM0NDc=Q29tSFBQQ0VXVUFFEN0E3Qjc0MEU5O",
    cuis: "2E8B5B9E",
    tipoFacturaDocumento: 1,
    archivo: null,
    fechaEnvio: "2022-03-03T19:34:01.001",
    hashArchivo: "",
    tipoFactura: 1,
    codigoControl: "48BBF9D30956D74",
    factura: {
        cabecera: {
            nitEmisor: 3726922011,
            razonSocialEmisor: "TODO TIX 2022",
            municipio: "La Paz",
            telefono: "103456789",
            numeroFactura: 125,
            cuf: "string",
            cufd: "BQUtCV8K/XURBNzTRDODkzNzM0NDc=Q29tSFBQQ0VXVUFFEN0E3Qjc0MEU5O",
            codigoSucursal: 0,
            direccion: "Test ",
            codigoPuntoVenta: 0,
            fechaEmision: "2022-03-03T19:34:01.001",
            nombreRazonSocial: "Cortéz",
            codigoTipoDocumentoIdentidad: 1,
            numeroDocumento: "6572301",
            complemento: "1H",
            codigoCliente: "SOZA",
            codigoMetodoPago: 1,
            numeroTarjeta: null,
            montoTotal: 50,
            montoTotalSujetoIva: 50,
            codigoMoneda: 1,
            tipoCambio: 1,
            montoTotalMoneda: 50,
            montoGiftCard: 0,
            descuentoAdicional: 0,
            codigoExcepcion: 0,
            cafc: null,
            leyenda: "LEYENDA",
            usuario: "test",
            codigoDocumentoSector: 1
        },
        detalle: [{
            actividadEconomica: "620000",
            codigoProductoSin: 83143,
            codigoProducto: "JN-131231",
            descripcion: "JUGO DE NARANJA EN VASO",
            cantidad: 5,
            unidadMedida: 58,
            precioUnitario: 2.5,
            montoDescuento: null,
            subTotal: 12.5
        },
        {
            actividadEconomica: "620000",
            codigoProductoSin: 831439,
            codigoProducto: "JN-131232",
            descripcion: "JUGO DE MANDARINA EN VASO",
            cantidad: 5,
            unidadMedida: 58,
            precioUnitario: 2.5,
            montoDescuento: null,
            subTotal: 12.5
        },
        {
            actividadEconomica: "620000",
            codigoProductoSin: 831439,
            codigoProducto: "JN-131234",
            descripcion: "JUGO DE LIMA EN VASO",
            cantidad: 5,
            unidadMedida: 58,
            precioUnitario: 2.5,
            montoDescuento: null,
            subTotal: 12.5
        },
        {
            actividadEconomica: "620000",
            codigoProductoSin: 831439,
            codigoProducto: "JN-131233",
            descripcion: "JUGO DE TORONJA EN VASO",
            cantidad: 5,
            unidadMedida: 58,
            precioUnitario: 2.5,
            montoDescuento: null,
            subTotal: 12.5
        }]
    }
}
  $.ajax(
    {
      type:"POST",
      url:"https://localhost:44392/api/CompraVenta/recepcion",
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
