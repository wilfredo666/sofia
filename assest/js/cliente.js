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