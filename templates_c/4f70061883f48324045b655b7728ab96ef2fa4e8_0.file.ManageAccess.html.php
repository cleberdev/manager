<?php
/* Smarty version 3.1.32, created on 2018-11-07 20:28:23
  from '/Applications/AMPPS/www/manager/views/ManageAccess.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be34ae7d4efb9_28979582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f70061883f48324045b655b7728ab96ef2fa4e8' => 
    array (
      0 => '/Applications/AMPPS/www/manager/views/ManageAccess.html',
      1 => 1541622500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be34ae7d4efb9_28979582 (Smarty_Internal_Template $_smarty_tpl) {
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
            <li><a href="javascript:void(0)">Gerir Acessos</a></li>
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
          <h2><button type="button" name="button" id="user_button">Novo + </button></h2>
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
            <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Tipos de acesso ao sistema">Gerir Acessos</a>
          </div>
          <h2><button type="button" name="button" id="button_add_cancel">Cancelar</button></h2>

        </div>
        <!-- END Labels on top Form Title -->

        <!-- Labels on top Form Content -->

        <form action="AccessList" method="post" class="form-bordered" id="AccessList">
          <!-- field that authorizes the system to use the module -->
          <input type="hidden" name="module" value="AccessList">
          <input type="hidden" name="updateData" value="">

          <div class="form-group">
            <label class="col-md-3 control-label" for="example-select">Tipo de Acesso</label>
            <select id="example-select" name="example-select" class="form-control" size="1">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, json_decode($_smarty_tpl->tpl_vars['colectionDataSelect']->value), 'curr_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['curr_id']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['curr_id']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['curr_id']->value->typeLevel;?>
</option>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>

          </div>

      <div class="block">
        <!-- Checkboxes Title -->
        <div class="block-title">
            <div class="block-options pull-right">
                <!-- <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default toggle-bordered enable-tooltip" data-toggle="button" title="" style="overflow: hidden; position: relative;" data-original-title="Toggles .form-bordered class"></a> -->
            </div>
            <h2>Esse tipo poderá: </h2>
        </div>

<?php $_smarty_debug = new Smarty_Internal_Debug;
 $_smarty_debug->display_debug($_smarty_tpl);
unset($_smarty_debug);
?>
        <!-- Switches Content -->
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, json_decode($_smarty_tpl->tpl_vars['colectionDataCHK']->value), 'curr_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['curr_id']->value) {
?>
        <div class="checkbox">
                <label for="example-checkbox<?php echo $_smarty_tpl->tpl_vars['curr_id']->value->id;?>
">
                    <input type="checkbox" id="example-checkbox<?php echo $_smarty_tpl->tpl_vars['curr_id']->value->id;?>
" name="example-checkbox1" value="<?php echo $_smarty_tpl->tpl_vars['curr_id']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['curr_id']->value->name;?>

                </label>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>




        <!-- END Checkboxes Content -->


      </div>


          <div class="form-group form-actions">
            <button type="submit" class="btn btn-effect-ripple btn-primary">Gravar</button>
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
