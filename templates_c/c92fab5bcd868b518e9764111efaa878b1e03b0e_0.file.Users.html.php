<?php
/* Smarty version 3.1.32, created on 2018-11-01 17:12:47
  from '/Applications/AMPPS/www/manager/views/Users.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bdb340f512420_90822995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c92fab5bcd868b518e9764111efaa878b1e03b0e' => 
    array (
      0 => '/Applications/AMPPS/www/manager/views/Users.html',
      1 => 1541090767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bdb340f512420_90822995 (Smarty_Internal_Template $_smarty_tpl) {
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
            <li><a href="javascript:void(0)">Cadastro de Usuários</a></li>
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
      <div class="block-options pull-right">
        <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default" data-toggle="tooltip" title="" style="overflow: hidden; position: relative;" data-original-title="Settings"><i class="fa fa-cog"></i></a>
        <div class="btn-group">
          <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default dropdown-toggle enable-tooltip" data-toggle="dropdown" title="" style="overflow: hidden; position: relative;" data-original-title="Opções">
                                             <i class="fa fa-chevron-down"></i>
                                           </a>
          <ul class="dropdown-menu dropdown-menu-right">
            <li>
              <a href="Userlevel">
                 <i class="fa fa-pencil pull-right"></i>
                 Níveis de Permissão
              </a>
          </li>
          <li>
          <a href="javascript:void(0)">
               <i class="fa fa-refresh pull-right"></i>
               Update
             </a>
          </li>
          <li class="divider"></li>
          <li>
          <a href="javascript:void(0)">
             <i class="fa fa-trash-o fa-fw pull-right"></i>
             Delete
 </a>
            </li>
          </ul>
        </div>
      </div>

      <a href="#modal-add-user" class="btn btn-sm btn-success btn-new-user" data-toggle="modal"><i class="fa fa-plus"></i>Novo Usuário</a>
      <h2></h2>
    </div>
    <!-- END Example Title -->

    <!-- Contacts Content -->
    <div class="row">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['response']->value, 'curr_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['curr_id']->value) {
?>
      <div class="col-sm-4 col-lg-3">
        <div class="media-items animation-fadeInQuick2">
          <div class="media-items-options text-right">
            <!-- <a href="img/placeholders/photos/photo1.jpg" class="btn btn-xs btn-info" data-toggle="lightbox-image">View</a> -->
            <a href="#modal-add-user" class="btn btn-xs btn-success btn_update" data-toggle="modal" flag="<?php echo $_smarty_tpl->tpl_vars['curr_id']->value->id;?>
"><i class="fa fa-pencil"></i></a>
            <a href="javascript:void(0)" class="btn btn-xs btn-danger btn-danger btn_delete" data-toggle="tooltip" flag="<?php echo $_smarty_tpl->tpl_vars['curr_id']->value->id;?>
" title="Excluir"><i class="fa fa-times"></i></a>
          </div>
          <div class="media-items-content">
            <img src="<?php echo $_smarty_tpl->tpl_vars['link_img']->value;?>
placeholders/avatars/avatar9.jpg" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar pull-center">
          </div>
          <h4>

        <strong><?php echo $_smarty_tpl->tpl_vars['curr_id']->value->name;?>
</strong><br>
        <small><?php echo $_smarty_tpl->tpl_vars['curr_id']->value->email;?>
</small>
      </h4>
</div>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


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
        <h3 class="modal-title"><i class="fa fa-plus"></i> <strong>Novo Usuário</strong></h3>
      </div>
      <div class="modal-body">
        <form action="Users" method="post" id="form_users" class="form-horizontal form-bordered">
          <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value;?>
" name="module">
          <input type="hidden" value="add" name="action">
          <input type="hidden" value="1" name="type">
          <input type="hidden" value="" name="identity">

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
      </div>
    </div>
  </div>
</div>
<!-- END Add Contact Modal -->
<?php }
}
