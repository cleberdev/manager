<?php
/* Smarty version 3.1.32, created on 2018-10-08 20:21:28
  from '/Applications/AMPPS/www/manager/views/Userlevel.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bbbbc48c0ec64_08548465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f77366ca176c7cd46b359d46ae2d6296a8767057' => 
    array (
      0 => '/Applications/AMPPS/www/manager/views/Userlevel.html',
      1 => 1539030085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbbbc48c0ec64_08548465 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- END Header -->

<!-- Page content -->
<div id="page-content">
  <!-- Contacts Header -->
  <div class="content-header">
    <div class="row">
      <div class="col-sm-6">
        <div class="header-section">
          <h1></h1>
        </div>
      </div>
      <div class="col-sm-6 hidden-xs">
        <div class="header-section">
          <ul class="breadcrumb breadcrumb-top">
            <li><a href="Dashboard">Dashboard</a></li>
            <li><a href="javascript:void(0)">Níveis de Usuários</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="text-center border-top push-inner-top-bottom">


    </div>
  </div>
  <!-- END Contacts Header -->
  <div class="block">
    <!-- Example Title -->
    <div class="block-title">


     <a href="#modal-add-user" class="btn btn-sm btn-success btn-new-user" data-toggle="modal"><i class="fa fa-plus"></i>Novo</a>
     <h2></h2>
   </div>
   <!-- END Example Title -->

   <!-- Contacts Content -->
   <div class="row">



   </div>
   <!-- END Contacts Content -->
 </div>

</div>
<!-- END Page Content -->
<!-- Add Contact Modal -->
<div id="modal-add-user" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title"><i class="fa fa-plus"></i> <strong>Novo</strong></h3>
      </div>
      <div class="modal-body">
        <!-- General Elements Block -->
        <div class="block">
          <!-- General Elements Title -->
          <div class="block-title">
            <div class="block-options pull-right">
              <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class">Borderless</a>
            </div>
            <h2>General Elements</h2>
          </div>
          <!-- END General Elements Title -->

          <!-- General Elements Content -->
          <form id="userLevelForm" action="Userlevel" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">

            <div class="form-group">
              <label class="col-md-3 control-label" for="example-text-input">Nome nivél de acesso</label>
              <div class="col-md-6">
                <input type="text" id="example-text-input" name="typeLevel" class="form-control" placeholder="nome nivél de acesso">
                <span class="help-block">Descreva sobre esse tipo de acesso</span>
              </div>
            </div>



            <div class="form-group">
              <label class="col-md-3 control-label" for="example-textarea-input">Descrição</label>
              <div class="col-md-9">
                <textarea id="example-textarea-input" name="description" rows="7" class="form-control" placeholder="Descrição.."></textarea>
              </div>
            </div>







            <div class="form-group form-actions">
              <div class="col-md-9 col-md-offset-3">
                <input type="submit" class="btn btn-effect-ripple btn-primary" value="Gravar">
              </div>
            </div>
          </form>
          <!-- END General Elements Content -->
        </div>
        <!-- END General Elements Block -->
      </div>
    </div>
  </div>
</div>
<!-- END Add Contact Modal -->
<?php }
}
