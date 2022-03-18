/*==============================================
Traduciendo DataTable proveedores y cargando datos
===============================================*/
$(function () {
  $("#DataTableProveedor").DataTable({
    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
    "paging": true,
    "lengthChange": false,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    "ajax": "vista/modulos/dataTableProveedor.php",
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

  }).buttons().container().appendTo('#DataTableProveedores_wrapper .col-md-6:eq(0)');
});

/*$.ajax({
  url:"vista/modulos/dataTableCliente.php",
  success:function(data){
    console.log(data);
  }
})*/

function FNuevoProveedor(){
  window.location="FormRegProveedor";
}

function MVerProveedor(codProveedor){
  $('#modal-lg').modal('show');
  var obj="";
  $.ajax(
    {
      type:"POST",
      url:"vista/modulos/VerProveedor.php?codProveedor="+codProveedor,
      data:obj,
      success:function(data){

        $("#contenido-lg").html(data);
      }
    }
  )
}

function EditProveedor(codProveedor){

  window.location="FormEditProveedor?"+codProveedor;

}

function MEliProveedor(codProveedor){
  $('#modal-default').modal('show');
  var obj="";
  $.ajax(
    {
      type:"POST",
      url:"vista/modulos/MEliProveedor.php?codProveedor="+codProveedor,
      data:obj,
      success:function(data){

        $("#contenido-default").html(data);
      }
    }
  )
}

function EliProveedor(codProveedor){

  var obj="";
  $.ajax(
    {
      type:"POST",
      url:"vista/modulos/EliProveedor.php?codProveedor="+codProveedor,
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
function validacionRegProveedor() {
    var codProveedor=document.getElementById("codProveedor").value;
    var nitProveedor=document.getElementById("nitProveedor").value;
    var razonProveedor=document.getElementById("razonProveedor").value;
    var nomProveedor=document.getElementById("nomProveedor").value;
    var apProveedor=document.getElementById("apProveedor").value;
    var dirProveedor=document.getElementById("dirProveedor").value;
    var telProveedor=document.getElementById("telProveedor").value;
  if( telProveedor == null || telProveedor === '' ){
    document.getElementById("errorTelProv").innerHTML="Telefono no debe estar vacio";
    return false;
  }
  if( dirProveedor == null || dirProveedor === ''){
    document.getElementById("errorDirProv").innerHTML="Direccion no debe estar vacio";
    return false;
  }
  if( apProveedor == null || apProveedor === ''){
    document.getElementById("errorApeProv").innerHTML="Apellido no debe estar vacio";
    return false;
  }
  if( nomProveedor == null || nomProveedor === ''){
    document.getElementById("errorNomProv").innerHTML="Nombre no debe estar vacio";
    return false;
  }
  if( razonProveedor == null || razonProveedor === ''){
    document.getElementById("errorRazProv").innerHTML="Razon Social no debe estar vacio";
    return false;
  }
  if( nitProveedor == null || nitProveedor === ''){
    document.getElementById("errorNitProv").innerHTML="NIT no debe estar vacio";
    return false;
  }
  if( codProveedor == null || codProveedor.length < 3 || codProveedor === '') {
    document.getElementById("errorCodProv").innerHTML="Codigo No debe estar vacio y debe tener mas de 3 caracteres";
      return false;     
  }
  
  return true;
}