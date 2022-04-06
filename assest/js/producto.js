/*==============================================
Traduciendo DataTable productos y cargando datos
===============================================*/
$(function () {
  $("#DataTableProductos").DataTable({
    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
    "paging": true,
    "lengthChange": false,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    "ajax": "vista/modulos/dataTableProducto.php",
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

  }).buttons().container().appendTo('#DataTableProductos_wrapper .col-md-6:eq(0)');
});

function FNuevoProducto(){
  window.location="FormRegProducto";
}

function MVerProducto(codProducto){
  $('#modal-lg').modal('show');
  var obj="";
  $.ajax(
    {
      type:"POST",
      url:"vista/modulos/VerProducto.php?codProducto="+codProducto,
      data:obj,
      success:function(data){

        $("#contenido-lg").html(data);
      }
    }
  )
  
}

function MEditProducto(codProducto){

  window.location="FormEditProducto?"+codProducto;

}

function MEliProducto(codProducto){
  $('#modal-default').modal('show');
  var obj="";
  $.ajax(
    {
      type:"POST",
      url:"vista/modulos/MEliProducto.php?codProducto="+codProducto,
      data:obj,
      success:function(data){

        $("#contenido-default").html(data);
      }
    }
  )
}

function EliProducto(codProducto){

  var obj="";
  $.ajax(
    {
      type:"POST",
      url:"vista/modulos/EliProducto.php?codProducto="+codProducto,
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

function validacionRegProducto() {
    var codProducto=document.getElementById("codProducto").value;
    var nomProducto=document.getElementById("nomProducto").value;
    var marcaProducto=document.getElementById("marcaProducto").value;
    var nomProveedorProducto=document.getElementById("nomProveedorProducto").value;
    var unidadProducto=document.getElementById("unidadProducto").value;
  if( unidadProducto == null || unidadProducto === '' ){
    document.getElementById("errorUnidPro").innerHTML="Unidad no debe estar vacio";
    return false;
  }
  if( nomProveedorProducto == null || nomProveedorProducto === ''){
    document.getElementById("errorProvPro").innerHTML="Proveedor no debe estar vacio";
    return false;
  }
  if( marcaProducto == null || marcaProducto === ''){
    document.getElementById("errorMarcPro").innerHTML="Marca no debe estar vacio";
    return false;
  }
  if( nomProducto == null || nomProducto === ''){
    document.getElementById("errorNomPro").innerHTML="Nombre no debe estar vacio";
    return false;
  }
  if( codProducto == null || codProducto.length < 3 || codProducto === '') {
    document.getElementById("errorCodPro").innerHTML="No debe estar vacio y debe tener mas de 3 caracteres";
      return false;     
  }
  
  return true;
}