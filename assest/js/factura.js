var codSistema=document.getElementById("codSistema").value
var token=document.getElementById("token").value

setInterval(()=>{
  verificarComunicacion(token)
},3000)


/*==================================
comprobar conexion con SIAT - metodo
====================================*/
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
  const objDetalle={
    cant: CantProducto.value,
    descripcion: DescProducto.value,
    preUnitario: PreUnitario.value,
    preTotal: PreTotal.value
  };

  arregloDetalle.push(objDetalle);

  redibujarTabla();


}


/*================
busqueda de cliente
==================*/
function busCliente(){
  var nit=document.getElementById("nitCliente").value

  var obj="";
  $.ajax(
    {
      type:"POST",
      url:"vista/modulos/resBusCliente.php?txtBus="+nit,
      data:obj,
      dataType:"json",
      success:function(data){

        document.getElementById("RSCliente").value=data["RAZON"];
        document.getElementById("RSClienteEmail").value=data["EMAIL"];
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
  var myBox1 = document.getElementById('CantProducto').value; 
  var myBox2 = document.getElementById('PreUnitario').value;
  var result = document.getElementById('PreTotal'); 
  var myResult = myBox1 * myBox2;
  result.value = myResult;

}