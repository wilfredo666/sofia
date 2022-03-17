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

function buscarnit(){
    
    var nit=document.getElementById("nitCliente").value;
    var obj="";
    
    $.ajax(
    {
      type:"POST",
      url:"vista/modulos/resBusCliente.php?nit="+nit,
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



