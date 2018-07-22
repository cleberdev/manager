$( document ).ready(function() {


  $('.btn_update').click(function(){
    var idx = $(this).index(this);
    var pKey = $(this).eq(idx).attr('flag');   

    getData('update', pKey, 'Users'); 
  });


  

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




  function getData(param_action, param_key, param_module){
    $.ajax({
      url : 'AjaxServices.php', /* url the service */
      type : 'GET', /* request type */
      data: 'action='+ param_action + '&key='+ param_key +'&module='+ param_module,
      dataType: 'json',
      success: function(data){
        console.log(data[0]['name']);  
      }//success
    });
  }//END getData

});
