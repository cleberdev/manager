$( document ).ready(function() {

  $('#form_users').submit(function(event){
   event.preventDefault();
   sendData();
   });//END SUBMIT BUTTOM

  function sendData(){
    $.ajax({
      url : 'AjaxServices.php', /* url the service */
      type : 'POST', /* request type */
      data: $('#form_users').serialize(),
      dataType: 'json',  //type data
      success: function(data){
        if(data === null){
          location.reload();
        }else{
          $(".response-content").html( '' );
          $.each(data, function () {
            $.each(this, function (name, value) {
             $(".response-content").append( "<span>"+value+"</span><br>" ).css('display', 'block');
           });
          });
        }
        }//success
      });
  }
});
