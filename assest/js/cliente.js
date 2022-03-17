/*==============================================
Traduciendo DataTable clientes y cargando datos
===============================================*/
$(function () {
  $("#DataTableCliente").DataTable({
    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
    "paging": true,
    "lengthChange": false,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    "ajax": "vista/modulos/dataTableCliente.php",
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

  }).buttons().container().appendTo('#DataTableClientes_wrapper .col-md-6:eq(0)');
});

/*$.ajax({
  url:"vista/modulos/dataTableCliente.php",
  success:function(data){
    console.log(data);
  }
})*/

function FNuevoCliente(){
  window.location="FormRegCliente";
}

function MVerCliente(codCliente){
  $('#modal-lg').modal('show');
  var obj="";
  $.ajax(
    {
      type:"POST",
      url:"vista/modulos/VerCliente.php?codCliente="+codCliente,
      data:obj,
      success:function(data){

        $("#contenido-lg").html(data);
      }
    }
  )
}

function EditCliente(codCliente){

  window.location="FormEditCliente?"+codCliente;

}

function MEliCliente(codCliente){
  $('#modal-default').modal('show');
  var obj="";
  $.ajax(
    {
      type:"POST",
      url:"vista/modulos/MEliCliente.php?codCliente="+codCliente,
      data:obj,
      success:function(data){

        $("#contenido-default").html(data);
      }
    }
  )
}

function EliCliente(codCliente){

  var obj="";
  $.ajax(
    {
      type:"POST",
      url:"vista/modulos/EliCliente.php?codCliente="+codCliente,
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