$(document).ready(function(){
    $("#cadastrar").on("submit", function(event){
      event.preventDefault();
      /*$.ajax({
        method: "POST",
        url: "cadastra_agenda_calend.php",
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function(retorna){
          if(retorna['sit']){
            $("#msg-cad").html(retorna['msg']);
          }else{
            $("#msg-cad").html(retorna['msg']);
          }
        }
      })*/
    })
  })