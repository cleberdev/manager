$( document ).ready(function() {

  // Action for update of date
  $('.btn_update').click(function(){
    var idx = $(this).index(this);
    var pKey = $(this).eq(idx).attr('flag');   

    getDataUser('update', pKey, 'Users'); 
  });


  
  //action for send data
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
        console.log(data);
        // if(data === null){
        //   location.reload();
        // }else{
        //   $(".response-content").html( '' );
        //   $.each(data, function () {
        //     $.each(this, function (name, value) {
        //      $(".response-content").append( "<span>"+value+"</span><br>" ).css('display', 'block');
        //    });
        //   });
        // }
        }//success
      });
  }




  function getDataUser(param_action, param_key, param_module){
    $(".response-content").append( "<span></span><br>" ).css('display', 'none');
    $.ajax({
      url : 'AjaxServices.php', /* url the service */
      type : 'GET', /* request type */
      data: 'action='+ param_action + '&key='+ param_key +'&module='+ param_module,
      dataType: 'json',
      success: function(data){
        $('input[name=identity]').val(data[0]['id']);
        $('input[name=action]').val('update');
        $('input[name=type]').val(1); //waiting an momento for integrat
        $('input[name=name]').val(data[0]['name']);
        $('input[name=email]').val(data[0]['email']);
        $('input[name=phone]').val(data[0]['phone']); 
        $('input[name=login]').val(data[0]['login']);
        $('input[name=password]').val('');  
      }//success
    });
  }//END getDataUser

});
