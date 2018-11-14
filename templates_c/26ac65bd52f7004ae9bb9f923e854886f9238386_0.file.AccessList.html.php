<?php
/* Smarty version 3.1.32, created on 2018-11-14 19:39:48
  from '/Applications/AMPPS/www/manager/views/AccessList.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7a04469127_21256218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26ac65bd52f7004ae9bb9f923e854886f9238386' => 
    array (
      0 => '/Applications/AMPPS/www/manager/views/AccessList.html',
      1 => 1542224362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7a04469127_21256218 (Smarty_Internal_Template $_smarty_tpl) {
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
            <li><a href="javascript:void(0)">Lista de Acesso</a></li>
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
          <h2><button class="btn btn-effect-ripple btn-info" type="button" name="button" id="user_button">Novo + </button></h2>
        </div>
        <div class="table-responsive">
          <table id="example-datatable" class="table table-striped table-bordered table-vcenter">
            <thead>
              <tr>
                <th class="text-center" style="width: 50px;">ID</th>
                <th>Nome</th>
                <th>Descrição</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['curr_id']->value->description;?>
</td>
                <td><span class="label label-info">ativo</span></td>
                <td class="text-center">
                  <a href="javascript:void(0)" flag="<?php echo $_smarty_tpl->tpl_vars['curr_id']->value->id;?>
" data-toggle="tooltip" title="Editar Registro" class="btn btn-effect-ripple btn-xs btn-success btn_edit_accessList"><i class="fa fa-pencil"></i></a>
                  <a href="javascript:void(0)" flag="<?php echo $_smarty_tpl->tpl_vars['curr_id']->value->id;?>
" data-toggle="tooltip" title="Excluir Registro" class="btn btn-effect-ripple btn-xs btn-danger btn_del_accessList"><i class="fa fa-times"></i></a>
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
          <div class="block-options pull-right">
            <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Tipos de acesso ao sistema">Lista de Acesso</a>
          </div>
          <h2><button class="btn btn-effect-ripple btn-danger" type="button" name="button" id="button_add_cancel">Cancelar</button></h2>

        </div>
        <!-- END Labels on top Form Title -->

        <!-- Labels on top Form Content -->

        <form action="AccessList" method="post" class="form-bordered" id="AccessList">
          <!-- field that authorizes the system to use the module -->
          <input type="hidden" name="module" value="AccessList">
          <input type="hidden" name="updateData" value="">

          <div class="form-group">
            <label for="example-nf-email">Nome do tipo</label>
            <input type="text" name="name" id="example-nf-email" class="form-control">
            <span class="help-block">Por favor entre com o nome</span>
          </div>
          <div class="form-group">
            <label for="example-nf-password">Descrição</label>
            <textarea id="example-textarea-input" name="description" rows="7" class="form-control" placeholder="Descrição.."></textarea>
            <span class="help-block">Por favor entre com a descrição</span>
          </div>

          <div class="form-group form-actions">
            <button type="submit" class="btn btn-effect-ripple btn-info">Gravar</button>
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
