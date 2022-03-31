/*==================================
comprobar conexion con SIAT - metodo
====================================*/
var codSistema=document.getElementById("codSistema").value
var token=document.getElementById("token").value


setInterval(()=>{
  verificarComunicacion(token)
},3000)

function verificarComunicacion(token){
  var obj="";
  $.ajax(
    {
      type:"POST",
      url:"https://localhost:5001/api/CompraVenta/comunicacion?token="+token,
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
obtener CUIS - metodo
====================================*/
var nitEmpresa=document.getElementById("nitEmpresa").innerHTML
var cuis;
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
      url:"https://localhost:5001/api/Codigos/solicitudcuis?token="+token,
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

/*==================================
obtener CUFD - metodo
====================================*/
function solicitudcufd(){
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
      url:"https://localhost:5001/api/Codigos/solicitudcufd?token="+token,
      data:JSON.stringify(obj),
      cache:false,
      contentType:"application/json",
      processData:false,
      success:function(data){

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



/*==========================
traduciendo los apartados de DataTable - reporte ventas
===========================*/
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

const formDetalle= document.getElementById("formDetalle");
const CantProducto=document.getElementById("CantProducto");
const DescProducto=document.getElementById("DesProducto");
const PreUnitario=document.getElementById("PreUnitario");
const PreTotal=document.getElementById("PreTotal");
const ListaDetalle=document.getElementById("ListaDetalle");


let arregloDetalle=[];

const redibujarTabla=()=>{
  ListaDetalle.innerHTML="";
  arregloDetalle.forEach((detalle)=>{
    let fila=document.createElement("tr");

    fila.innerHTML='<td>'+detalle.cant+'</td>'+
      '<td>'+detalle.descripcion+'</td>'+
      '<td>'+detalle.preUnitario+'</td>'+
      '<td>'+detalle.preTotal+'</td>';


    let tdEliminar=document.createElement("td");
    let botonEliminar =document.createElement("button");
    botonEliminar.classList.add("btn", "btn-danger");
    botonEliminar.innerText="Eliminar";
    tdEliminar.appendChild(botonEliminar);
    fila.appendChild(tdEliminar);
    ListaDetalle.appendChild(fila);
  })
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


function agregarCarrito(){

  //creando un objeto
  var resultforsub = parseFloat(document.getElementById('SubTotal').value); 
  console.log(resultforsub);
  var Subtotal= parseFloat(document.getElementById('PreTotal').value);
  console.log(Subtotal);
  var Acumuladorsub= resultforsub + Subtotal;
  console.log(Acumuladorsub);
  var NuevoSubtotal=document.getElementById('SubTotal');
  NuevoSubtotal.value=Acumuladorsub;

  const objDetalle={
    cant: CantProducto.value,
    descripcion: ConcProducto.value,
    preUnitario: PreUnitario.value,
    preTotal: PreTotal.value
  };

  arregloDetalle.push(objDetalle);

  redibujarTabla();


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
        }else{
          document.getElementById("RSCliente").value=data["RAZON"];
          document.getElementById("RSClienteEmail").value=data["EMAIL"];
          verificarNit(nitCliente)
        }

      }
    }
  )
}

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
      url:"https://localhost:5001/api/Codigos/verificarNit?token="+token,
      data:JSON.stringify(obj),
      cache:false,
      contentType:"application/json",
      processData:false,
      success:function(data){
        if(data["transaccion"]==false){
          document.getElementById("error-rs").className="text-danger"
          document.getElementById("error-rs").innerHTML="Contribuyente no activo"
        }else{
          document.getElementById("error-rs").className="text-success"
          document.getElementById("error-rs").innerHTML="Contribuyente activo"
        }
      }
    }
  )
}


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

/*>>>>>>> 081bb022e0f326fb7e419983da18cb993375e2c7*/

$('input.CurrencyInput').on('blur', function() {
  const value = this.value.replace(/,/g, '');
  this.value = parseFloat(value).toLocaleString('en-US', {
    style: 'decimal',
    maximumFractionDigits: 2,
    minimumFractionDigits: 2
  });
});