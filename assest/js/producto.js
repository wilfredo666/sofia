/*==============================================
Traduciendo DataTable productos y cargando datos
===============================================*/
$(function () {
  $("#DataTableProducto").DataTable({
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

/*$.ajax({
  url:"vista/modulos/dataTableCliente.php",
  success:function(data){
    console.log(data);
  }
})*/

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

function EditProducto(codProducto){

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