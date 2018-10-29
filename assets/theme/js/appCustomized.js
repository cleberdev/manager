$( document ).ready(function() {

var theForm = document.getElementById("validationItens");
for(var i = 0; i < theForm.resultValidation.length; i++){
    console.log(theForm.resultValidation[i].value);
   $(".msnErr").append('<p>'+theForm.resultValidation[i].value+'</p>');
}
  //Action for delete record
  $('.btn_delete').click(function(){
    var idx = $(this).index(this);
    var pKey = $(this).eq(idx).attr('flag');

    $.confirm({
      title: 'Excluir Registro',
      content: 'Deseja realmente Apagar este registro ?',
      theme: 'material',
      closeIcon: true,
      animation: 'scale',
      type: 'red',
      buttons: {
        Sim: function () {
          deleteRecord('delete', pKey, 'Users');
          location.reload();
        },
        Não: function () {  }
      }
    });
  });


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
    var passwod   = $('#add-pass-mobile').val();
    var passwod_c = $('input[name=password_confirm]').val();

    console.log(passwod+' Confirm: '+passwod_c);

    if (passwod != passwod_c) {
      $.notify("Confirmação de Senha não confere com a informada.", { position:"top left" });
    }else{
      $.ajax({
        url : 'AjaxServices.php', /* url the service */
        type : 'POST', /* request type */
        data: $('#form_users').serialize(),
            dataType: 'json',  //type data
            success: function(data){
              if($.isEmptyObject(data)){
                location.reload();
              }else{
                var i;
                for (i = 0; i < data.length; i++) {
                  $.notify(data[i], { position:"top left" });
                }
              }
              }//success
            });
    }
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


  function deleteRecord(param_action, param_key, param_module){
    $.ajax({
      url : 'AjaxServices.php', /* url the service */
      type : 'GET', /* request type */
      data: 'action='+ param_action + '&key='+ param_key +'&module='+ param_module,
      dataType: 'json',
      success: function(data){
        $.alert('Registro Excluído com sucesso!');
      }//success
    });
  }//END getDataUser




  $('.btn-new-user').click(function(){
    $('input[name=identity]').val('');
    $('input[name=action]').val('add');
  $('input[name=type]').val(1); //waiting an momento for integrat
  $('input[name=name]').val('');
  $('input[name=email]').val('');
  $('input[name=phone]').val('');
  $('input[name=login]').val('');
  $('input[name=password]').val('');
});





}); //END DOCUMENT LOAD
