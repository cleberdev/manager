$( document ).ready(function() {

  $('#form_users').submit(function(event){
   event.preventDefault();
   sendData();
   location.reload();
   });//FIM SUBMIT BUTTOM

  function sendData(){
    $.ajax({
      url : 'AjaxServices.php', /* URL que será chamada */
      type : 'POST', /* Tipo da requisição */
      data: $('#form_users').serialize(), /* dado que será enviado via POST */
      dataType: 'json',  //Tipo de transmissão
      /* dado que será enviado via POST */
      success: function(data){
        $(".response-content").html( '' );
        $.each(data, function () {
          $.each(this, function (name, value) {
           $(".response-content").append( "<span>"+value+"</span><br>" ).css('display', 'block');
         });
        });
      }
    }); 
  }
});
