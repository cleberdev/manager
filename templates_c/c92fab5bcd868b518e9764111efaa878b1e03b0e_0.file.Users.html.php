<?php
/* Smarty version 3.1.32, created on 2018-11-14 19:37:34
  from '/Applications/AMPPS/www/manager/views/Users.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec797ebce718_40692118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c92fab5bcd868b518e9764111efaa878b1e03b0e' => 
    array (
      0 => '/Applications/AMPPS/www/manager/views/Users.html',
      1 => 1542224253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec797ebce718_40692118 (Smarty_Internal_Template $_smarty_tpl) {
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
            <li><a href="javascript:void(0)">Usuários</a></li>
          </ul>
        </div>
      </div>
    </div>

  </div>
  <!-- END Contacts Header -->
  <div class="block">
    <!-- Contacts Content -->
    <div class="row">

      <div class="block full block_list_user">


        <div class="block-title">
          <div class="block-options pull-right">
           <!--  <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default" data-toggle="tooltip" title="" style="overflow: hidden; position: relative;" data-original-title="Settings"><i class="fa fa-cog"></i></a> -->
           <div class="btn-group">
            <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default dropdown-toggle enable-tooltip" data-toggle="dropdown" title="" style="overflow: hidden; position: relative;" data-original-title="Opções">
             <i class="fa fa-cog"></i></i>
           </a>
           <ul class="dropdown-menu dropdown-menu-right">
            <li>
              <a href="Userlevel">
               <i class="fa fa-pencil pull-right"></i>
               Níveis de Permissão
             </a>
           </li>
           <li>
            <a href="AccessList">
             <i class="fa fa-pencil pull-right"></i>
             Lista de Acesso
           </a>
         </li>

         <li class="divider"></li>
         <li>
          <a href="ManageAccess">
           <i class="fa fa-pencil pull-right"></i>
           Gerir Acessos
         </a>
        </li>
        </ul>
        </div>
        </div>

        <button class="btn btn-effect-ripple btn-info" type="button" name="button" id="user_button"><i class="fa fa-plus"></i>Novo Usuário</button>
        <h2></h2>



        </div>
        <div class="table-responsive">

          <table id="example-datatable" class="table table-striped table-bordered table-vcenter">
            <thead>
              <tr>
                <th class="text-center" style="width: 50px;">ID</th>
                <th>Usuário</th>
                <th>E-mail</th>
                <th style="width: 120px;">Status</th>
                <th class="text-center" style="width: 75px;"><i class="fa fa-flash"></i></th>
              </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, json_decode($_smarty_tpl->tpl_vars['response']->value), 'curr_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['curr_id']->value) {
?>
              <tr>
                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['curr_id']->value->id;?>
</td>
                <td><strong><?php echo $_smarty_tpl->tpl_vars['curr_id']->value->name;?>
</strong></td>
                <td><?php echo $_smarty_tpl->tpl_vars['curr_id']->value->email;?>
</td>
                <td><span class="label label-info">Ativo</span></td>
                <td class="text-center">
                  <a href="javascript:void(0)" flag="<?php echo $_smarty_tpl->tpl_vars['curr_id']->value->id;?>
" data-toggle="tooltip" title="Editar Registro" class="btn btn-effect-ripple btn-xs btn-success btn_edit_users"><i class="fa fa-pencil"></i></a>
                  <a href="javascript:void(0)" flag="<?php echo $_smarty_tpl->tpl_vars['curr_id']->value->id;?>
" data-toggle="tooltip" title="Excluir Registro" class="btn btn-effect-ripple btn-xs btn-danger btn_del_users"><i class="fa fa-times"></i></a>
                </td>
              </tr>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
          </table>
        </div>
      </div>



      <!-- Labels on top Form Block -->
      <div class="block block_add_user">
        <!-- Labels on top Form Title -->
        <div class="block-title">
          <!-- <div class="block-options pull-right">
            <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Tipos de acesso ao sistema">Tipos de acesso ao sistem</a>
          </div> -->
          <h2><button class="btn btn-effect-ripple btn-danger" type="button" name="button" id="button_add_cancel">Cancelar</button></h2>

        </div>
        <!-- END Labels on top Form Title -->

        <!-- Labels on top Form Content -->

        <form action="Users" method="post" id="form_users_two" class="form-horizontal form-bordered">

          <input type="hidden" name="module" value="Users">
          <input type="hidden" name="updateData" value="">
          <input type="hidden" value="1" name="type">


          <div class="msn_conteiner response-content">

          </div>

          <div class="form-group">
            <label class="col-xs-3 control-label text-muted">NO AVATAR</label>
            <div class="col-xs-9">
              <i class="fa fa-fw fa-upload"></i> <a href="javascript:void(0)">Upload New Avatar</a><br>
              <i class="fa fa-fw fa-picture-o"></i> <a href="javascript:void(0)">Choose from Library</a>
            </div>
          </div>
          <div class="form-group">
            <label class="col-xs-3 control-label" for="add-contact-name">Name</label>
            <div class="col-xs-9">
              <input type="text" id="add-contact-name" name="name" class="form-control" placeholder="Enter Full Name.." value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-xs-3 control-label" for="add-contact-email">Email</label>
            <div class="col-xs-9">
              <input type="email" id="add-contact-email" name="email" class="form-control" placeholder="Enter Email..">
            </div>
          </div>
          <div class="form-group">
            <label class="col-xs-3 control-label" for="add-contact-phone">Telefone</label>
            <div class="col-xs-9">
              <input type="phone" id="add-contact-phone" name="phone" class="form-control" placeholder="(000) 000-0000">
            </div>
          </div>
          <div class="form-group">
            <label class="col-xs-3 control-label" for="add-contact-mobile">Login</label>
            <div class="col-xs-9">
              <input type="text" id="add-contact-mobile" name="login" class="form-control" placeholder="Entre com a senha..">
            </div>
          </div>
          <div class="form-group">
            <label class="col-xs-3 control-label" for="add-contact-mobile">Senha</label>
            <div class="col-xs-9">
              <input type="password" id="add-pass-mobile" name="password" class="form-control" data-loading-text=" Loading... " placeholder="Entre com a senha.. ">
            </div>
          </div>
          <div class="form-group">
            <label class="col-xs-3 control-label" for="add-contact-mobile">Confirme a senha</label>
            <div class="col-xs-9">
              <input type="password" id="add-pass-mobile-confirm" name="password_confirm" class="form-control" data-loading-text=" Loading... " required placeholder="Confirme sua senha.. ">
            </div>
          </div>


          <div class="form-group form-actions ">
            <div class="col-xs-12 text-right ">
              <button type="submit " class="btn btn-effect-ripple btn-success ">Salvar</button>
            </div>
          </div>
        </form>
        <!-- END Labels on top Form Content -->
      </div>
      <!-- END Labels on top Form Block -->

    </div>
    <!-- END Contacts Content -->
  </div>

</div>
<!-- END Page Content -->
<?php }
}
