/*=====================================================
traduciendo los apartados de DataTable - reporte ventas
======================================================*/
$(function () {
  $("#DataTableVentas").DataTable({
    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
    "paging": true,
    "lengthChange": false,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    "ajax": "vista/modulos/dataTableVenta.php",
    language: {
      "decimal": "",
      "emptyTable": "No hay información",
      "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
      "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
      "infoFiltered": "(Filtrado de _MAX_ total entradas)",
      "infoPostFix": "",
      "thousands": ",",
      "lengthMenu": "Mostrar _MENU_ Entradas",
      "loadingRecords": "Cargando...",
      "processing": "Procesando...",
      "search": "Buscar:",
      "zeroRecords": "Sin resultados encontrados",
      "paginate": {
        "first": "Primero",
        "last": "Ultimo",
        "next": "Siguiente",
        "previous": "Anterior"
      }
    }

  }).buttons().container().appendTo('#DataTableVentas_wrapper .col-md-6:eq(0)');
});

/*==================================
variables globales
====================================*/
var codSistema=document.getElementById("codSistema").value
var token=document.getElementById("token").value
var puerto=44392;
var host="https://"+document.getElementById("servidor").value+":"+puerto;
var nitEmpresa=document.getElementById("nitEmpresa").innerHTML
var cuis;
var cufd;
var direccionCufd;
var fechaVigCufd;
var codControlCufd;
/*host para la API*/
//var host="https://localhost:44392";

/*==================================
comprobar conexion con SIAT - metodo
====================================*/
/*
setInterval(()=>{
  verificarComunicacion(token)
},3000)
*/
function verificarComunicacion(token){
  var obj="";
  $.ajax(
    {
      type:"POST",
      url:host+"/api/CompraVenta/comunicacion?token="+token,
      data:JSON.stringify(obj),
      cache:false,
      contentType:"application/json",
      processData:false,
      success:function(data){
        if(data["transaccion"]==true){
          document.getElementById("comunSiat").innerHTML="conectado"
          document.getElementById("comunSiat").className="badge badge-success"
        }
      }
    }
  ).fail(function(jqXHR, textSatus, errorThrown){
    if(jqXHR.status==500){
      document.getElementById("comunSiat").innerHTML="desconectado"
      document.getElementById("comunSiat").className="badge badge-secondary"
    }
  })
}

/*==================================
registrar nuevo CUFD
====================================*/
function registrarNuevoCUFD(){
  solicitudcufd()
    .then(ok=>{
    if(ok!=""){
      var obj={
        "cufd":cufd,
        "direccionCufd":direccionCufd,
        "fechaVigCufd":fechaVigCufd,
        "codControlCufd":codControlCufd
      };

      $.ajax(
        {
          data:obj,
          url:"controlador/ventaControlador.php?crtNuevoCufd",
          type:"POST",
          cache:false,
          success:function(data){
            console.log(data);
          }
        }
      )
    }
  })

}


/*==================================
comprobar el la existencia del CUFD
====================================*/
function verificarExistenciaCUFD(){
  var obj="";
  $.ajax(
    {
      url:"controlador/ventaControlador.php?crtInfoCufd",
      type:"POST",
      data:obj,
      cache:false,
      dataType:"json",
      success:function(data){
        //cuando la consulta final en el modelo es un fetch, no te devuelve un multi arregloObj
        if(data.length==0){
          if(cufd!="" || cufd!=undefined){
            registrarNuevoCUFD();
          }
        }

      }
    }
  )
}

/*==================================
obtener CUIS - metodo
====================================*/

solicitudcuis()

function solicitudcuis(){
  var obj={
    codigoAmbiente: 2,
    codigoModalidad: 2,
    codigoPuntoVenta: 0,
    codigoPuntoVentaSpecified: true,
    codigoSistema: codSistema,
    codigoSucursal: 0,
    nit: nitEmpresa
  }
  $.ajax(
    {
      type:"POST",
      url:host+"/api/Codigos/solicitudcuis?token="+token,
      data:JSON.stringify(obj),
      cache:false,
      contentType:"application/json",
      processData:false,
      success:function(data){
        cuis=data["codigo"];
      }
    }
  )
}

/*====================================
transformar fecha con formato ISO 8061
======================================*/

function transformarFecha(fechaISO){
  //seperando caracteres
  let fecha_iso=fechaISO.split("T");
  let hora_iso=fecha_iso[1].split(".");

  let fecha=fecha_iso[0];
  let hora=hora_iso[0];

  var fecha_hora=fecha+":"+hora;
  return fecha_hora;
}

/*==================================
obtener CUFD - metodo
====================================*/

function solicitudcufd(){
  return new Promise((resolve, reject)=>{

    var obj={
      codigoAmbiente: 2,
      codigoModalidad: 2,
      codigoPuntoVenta: 0,
      codigoPuntoVentaSpecified: true,
      codigoSistema: codSistema,
      codigoSucursal: 0,
      nit: nitEmpresa,
      cuis:cuis
    }

    $.ajax(
      {
        type:"POST",
        url:host+"/api/Codigos/solicitudcufd?token="+token,
        data:JSON.stringify(obj),
        cache:false,
        contentType:"application/json",
        processData:false,
        success:function(data){
          cufd=data["codigo"];
          direccionCufd=data["direccion"];
          fechaVigCufd=transformarFecha(data["fechaVigencia"]);
          codControlCufd=data["codigoControl"];
          resolve(cufd);
        }
      }
    )
  })


}

/*==================================
verificar vigencia CUFD - metodo
====================================*/

function verificarVigenciaCufd(){
  //fecha actual
  let date= new Date();

  var obj="";
  $.ajax(
    {
      url:"controlador/ventaControlador.php?crtUltimoCufd",
      type:"POST",
      data:obj,
      cache:false,
      dataType:"json",
      success:function(data){

        //feha de vigencia del ultimo cufd
        let vigCufd=new Date(data["FECHAVIGENCIA"]);

        //comparando fechas
        if(date.getTime()>vigCufd.getTime()){
          console.log("Cufd caducado");
          registrarNuevoCUFD();

        }else{
          console.log("Cufd vigente");
          cufd=data["CODIGO"];
          direccionCufd=data["DIRECCION"];
          fechaVigCufd=data["FECHAVIGENCIA"];
          codControlCufd=data["CODIGOCONTROL"];
        }


      }
    }
  )
}

function MNuevaVenta(){
  window.location="FormFactura";
}

function MVerVenta(codVenta){
  $('#modal-lg').modal('show');
  var obj="";
  $.ajax(
    {
      type:"POST",
      url:"vista/modulos/VerVenta.php?codVenta="+codVenta,
      data:obj,
      success:function(data){
        $("#contenido-lg").html(data);
      }
    }
  )
}

function MEditVenta(codVenta){
  window.location="FormEditFactura?"+codVenta;
}

function MEliVenta(codVenta){
  $('#modal-default').modal('show');
  var obj="";
  $.ajax(
    {
      type:"POST",
      url:"vista/modulos/FEliFactura.php?codVenta="+codVenta,
      data:obj,
      success:function(data){
        $("#contenido-default").html(data);
      }
    }
  )
}

function EliVenta(codVenta){
  var obj="";
  $.ajax(
    {
      type:"POST",
      url:"vista/modulos/EliVenta.php?codVenta="+codVenta,
      data:obj,
      success:function(data){

        setTimeout(function(){
          $("#modal-default").modal("hide");
        },1000);
        setTimeout(function(){
          location.reload();
        },1200);

      }
    }
  )
}

/*===================
carrito
=====================*/
const ListaDetalle=document.getElementById("ListaDetalle");
let arregloDetalle=[];

const redibujarTabla=()=>{
  ListaDetalle.innerHTML="";
  arregloDetalle.forEach((detalle)=>{
    let fila=document.createElement("tr");

    fila.innerHTML='<td>'+detalle.concepto+'</td>'+
      '<td>'+detalle.cantProducto+'</td>'+
      '<td>'+detalle.preUnitario+'</td>'+
      '<td>'+detalle.descProducto+'</td>'+
      '<td>'+detalle.preTotal+'</td>';


    let tdEliminar=document.createElement("td");
    let botonEliminar =document.createElement("button");
    botonEliminar.classList.add("btn", "btn-danger");
    botonEliminar.innerText="Eliminar";
    botonEliminar.onclick=()=>{
      eliminarDetalleById(detalle.codigoProducto);
    }
    tdEliminar.appendChild(botonEliminar);
    fila.appendChild(tdEliminar);
    ListaDetalle.appendChild(fila);
  })
}

eliminarDetalleById=(cod)=>{
  arregloDetalle=arregloDetalle.filter((detalle)=>{
    if(cod!=detalle.codigoProducto){
      return detalle
    }
  })
  redibujarTabla()
  calcularTotal()
}

function agregarCarrito(){
  // 1.- obtiene todo los valores del apartado para buscar producto
  const codigoProducto=document.getElementById("codigoProducto");
  const ConcProducto=document.getElementById("ConcProducto");
  const CantProducto=document.getElementById("CantProducto");
  const UniMedProducto=document.getElementById("UniMedProducto");
  const PreUnitario=document.getElementById("PreUnitario");
  const DescProducto=document.getElementById("DescProducto");
  const LoteProd=document.getElementById("LoteProd");
  const PreTotal=document.getElementById("PreTotal");


  // 2.-Crea un objeto con los valores del apartado anterior
  const objDetalle={
    codigoProducto: codigoProducto.value,
    concepto: ConcProducto.value,
    cantProducto: CantProducto.value,
    uniMedProducto: UniMedProducto.value,
    preUnitario: parseFloat(PreUnitario.value),
    descProducto: parseFloat(DescProducto.value),
    loteProd: LoteProd.value,
    preTotal: parseFloat(PreTotal.value),
  };

  //3.-Agrega el objeto a un arreglo ya creado
  arregloDetalle.push(objDetalle);

  //4.- calcula el total a pagar, total descuento y definir valores
  calcularTotal()

  //5.- Vuelve a dibujar la tabla de detalle con todos los nuevos productos incluidos
  redibujarTabla();


}

calcularTotal=()=>{
  let totalApagar=0;
  let totalDescuento=0;
  let descAdicional=document.getElementById("descAdicional").value
  for(var i=0;i<arregloDetalle.length;i++){
    totalApagar=totalApagar+arregloDetalle[i].preTotal
    totalDescuento=totalDescuento+arregloDetalle[i].descProducto
  }
  document.getElementById("totDescuento").value=totalDescuento
  document.getElementById("totApagar").value=totalApagar-descAdicional
  document.getElementById("SubTotal").value=totalApagar
}

/*===================================
busqueda de cliente y validar con SIN
====================================*/

function busCliente(){
  var nitCliente=document.getElementById("nitCliente").value

  var obj="";
  $.ajax(
    {
      type:"POST",
      url:"vista/modulos/resBusCliente.php?txtBus="+nitCliente,
      data:obj,
      dataType:"json",
      success:function(data){
        if(data==false){
          document.getElementById("error-rs").className="text-danger"
          document.getElementById("error-rs").innerHTML="Cliente no registrado"
          document.getElementById("RSCliente").value="";
          document.getElementById("CodCliente").value="";
          document.getElementById("RSClienteEmail").value="";
        }else{
          document.getElementById("RSCliente").value=data["RAZON"];
          document.getElementById("CodCliente").value=data["COD"];
          if(data["EMAIL"]==null){
            document.getElementById("RSClienteEmail").value=""
          }else{
            document.getElementById("RSClienteEmail").value=data["EMAIL"];
          }
          verificarNit(nitCliente)
        }

      }
    }
  )
}

/*===================================
verificar nit cliente
====================================*/

function verificarNit(nitCliente){
  var obj={
    codigoAmbiente: 2,
    codigoModalidad: 2,
    codigoSistema: codSistema,
    codigoSucursal: 0,
    cuis: cuis,
    nit: nitEmpresa,
    nitParaVerificacion: nitCliente
  }
  $.ajax(
    {
      type:"POST",
      url:host+"/api/Codigos/verificarNit?token="+token,
      data:JSON.stringify(obj),
      cache:false,
      contentType:"application/json",
      processData:false,
      success:function(data){
        if(data["transaccion"]==false){
          document.getElementById("error-rs").className="text-warning"
          document.getElementById("error-rs").innerHTML="Contribuyente no activo"
        }else{
          document.getElementById("error-rs").className="text-success"
          document.getElementById("error-rs").innerHTML="Contribuyente activo"
        }
      }
    }
  )
}

/*===================================
buscar producto
====================================*/

function busCod(){
  var cod=document.getElementById("codigoProducto").value

  var obj="";
  $.ajax(
    {
      type:"POST",
      url:"vista/modulos/resBusProducto.php?txtBus="+cod,
      data:obj,
      dataType:"json",
      success:function(data){
        document.getElementById("ConcProducto").value="";
        document.getElementById("UniMedProducto").value="";
        document.getElementById("PreUnitario").value="";
        document.getElementById("LoteProd").value="";
        document.getElementById("CantProducto").value="1";
        document.getElementById("DescProducto").value="0.00";
        document.getElementById("PreTotal").value="";
        document.getElementById("ConcProducto").value=data["NOMBRE"];
        document.getElementById("UniMedProducto").value=data["UNIDAD"];
        document.getElementById("PreUnitario").value=data["PVTAML"];
        document.getElementById("LoteProd").value=data["LOTE"];
        document.getElementById("PreTotal").value=data["PVTAML"];
        document.getElementById("codigoProducto").focus();
      }
    }
  )
}

/* Sacar precio total "cantidad X precio unitario". */
function calculate() {

  var myBox1 = parseFloat(document.getElementById('CantProducto').value); 
  var myBox2 = parseFloat(document.getElementById('PreUnitario').value);
  var result = parseFloat(document.getElementById('PreTotal')); 
  var myResult = myBox1 * myBox2;
  result.value = myResult;

  var myBox1 = parseFloat(document.getElementById('CantProducto').value); 
  var myBox2 = parseFloat(document.getElementById('PreUnitario').value);
  var myBox3 = myBox1 * myBox2;
  var myBox4 = parseFloat(document.getElementById('DescProducto').value);
  var desctotal = myBox1 * myBox4;
  var result = document.getElementById('PreTotal'); 
  var myResult = myBox3 - desctotal;
  result.value = myResult;


}


$('input.CurrencyInput').on('blur', function() {
  const value = this.value.replace(/,/g, '');
  this.value = parseFloat(value).toLocaleString('en-US', {
    style: 'decimal',
    maximumFractionDigits: 2,
    minimumFractionDigits: 2
  });
});

/*======================================
cuando selecciona tipo de documento=>nit
========================================*/
function tipoDocumento(){
  let tpDocumento=document.getElementById("tpDocumento").value
  let contExcepcion='<label for="">Exceptuar NIT</label>'+
      '<div class="input-group form-control">'+
      '<div class="form-check form-check-inline">'+
      '<input type="radio" name="tipoNIT" class="form-check-input" value="0">'+
      '<label  class="form-check-label">SI</label>'+
      '</div>'+
      '<div class="form-check form-check-inline">'+
      '<input type="radio" name="tipoNIT" class="form-check-input" value="1">'+
      '<label  class="form-check-label">NO</label>'+
      '</div>'+
      '</div>'
  if(tpDocumento==5){
    document.getElementById("card-exepcion").innerHTML=contExcepcion
  }else{
    document.getElementById("card-exepcion").innerHTML=""
  }
}

/*=========================
emitir factura
==========================*/
function emitirFactura(){
  //verificar vigencia de CUFD
  verificarVigenciaCufd()

  let date=new Date();
  /*  var hora = date.getHours() + ':' + date.getMinutes() + ':' + date.getSeconds();
  var fecha=date.getDate()+ '-' + ( date.getMonth() + 1 ) + '-' + date.getFullYear();*/

  /* datos de cabecera factura */
  var fechaFactura=date.toISOString();//fecha
  var facSucursal=document.getElementById("FacSucursal").value;//sucursal
  var pntVenta=document.getElementById("pntVenta").value;//punto de venta
  var tpFactura=document.getElementById("tpFactura").value;//tipo de factura
  var FacActividad=document.getElementById("FacActividad").value;//actividad
  var RSClienteEmail;//email
  var RSCliente=document.getElementById("RSCliente").value;//nombre o razon social cliente
  var nitCliente=document.getElementById("nitCliente").value;// nit/ci cliente
  var totDescuento=document.getElementById("totDescuento").value; //total descuento
  var descAdicional=document.getElementById("descAdicional").value; //descuento adicional
  var totApagar=document.getElementById("totApagar").value; //total factura a pagar
  var SubTotal=document.getElementById("SubTotal").value; //subtotal factura a pagar
  var RSEmpresa=document.getElementById("RSEmpresa").innerHTML //razon social de la empresa
  var tpDocumento=document.getElementById("tpDocumento").value //tipo de documento de identidad
  var CodCliente=document.getElementById("CodCliente").value //codigo de cliente

  //en caso el email sea vacio
  if(document.getElementById("RSClienteEmail").value==""){
    RSClienteEmail="null";
  }else{
    RSClienteEmail=document.getElementById("RSClienteEmail").value
  }


  var obj={
    codigoAmbiente: 2, //?
    codigoPuntoVenta: pntVenta,
    codigoPuntoVentaSpecified: true,
    codigoSistema: codSistema,
    codigoSucursal: facSucursal,
    nit: nitEmpresa,
    codigoDocumentoSector: 1, //?
    codigoEmision: 1, //?
    codigoModalidad: 2, //?
    cufd: cufd,
    cuis: cuis,
    tipoFacturaDocumento: 1,
    archivo: null,
    fechaEnvio: fechaFactura,
    hashArchivo: "",
    tipoFactura: tpFactura,
    codigoControl: codControlCufd,
    factura: {
      cabecera: {
        nitEmisor: nitEmpresa,
        razonSocialEmisor: RSEmpresa,
        municipio: "Cochabamba",
        telefono: "44293074",
        numeroFactura: 1,
        cuf: "string",
        cufd: cufd,
        codigoSucursal: 0,
        direccion: "Test",
        codigoPuntoVenta: pntVenta,
        fechaEmision: fechaFactura,
        nombreRazonSocial: RSCliente,
        codigoTipoDocumentoIdentidad: tpDocumento,
        numeroDocumento: nitCliente,
        complemento: "",
        codigoCliente: CodCliente,
        codigoMetodoPago: 1,
        numeroTarjeta: null,
        montoTotal: totApagar,
        montoTotalSujetoIva: 50,
        codigoMoneda: 1,
        tipoCambio: 1,
        montoTotalMoneda: 50,
        montoGiftCard: 0,
        descuentoAdicional: descAdicional,
        codigoExcepcion: 0,
        cafc: null,
        leyenda: "LEYENDA",
        usuario: "test",
        codigoDocumentoSector: 1
      },
      detalle: arregloDetalle
    }
  }
  console.log(JSON.stringify(obj));
  /*$.ajax(
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
  )*/
}

/*  formDetalle.onsubmit=(e)=>{
    e.preventDefault();

    //creando un objeto
    const objDetalle={
      cant: CantProducto.value,
      descripcion: DescProducto.value,
      preUnitario: PreUnitario.value,
      preTotal: PreTotal.value
    };

    arregloDetalle.push(objDetalle);

    redibujarTabla();
  }*/
/*
-para convertir a un json
var jsonDetalle=JSON.stringify(arregloDetalle);

-para convertir a un objeto
var objDetalle=Object.assign({},arregloDetalle);
*/