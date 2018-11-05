<?php
/* Smarty version 3.1.32, created on 2018-11-05 01:06:55
  from 'C:\Program Files (x86)\Ampps\www\manager\views\ManageAccess.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bdf97afd35b88_06376330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6c0dffeba38a9b76db4fb125fb8c2ce692419cc' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\manager\\views\\ManageAccess.html',
      1 => 1541380012,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bdf97afd35b88_06376330 (Smarty_Internal_Template $_smarty_tpl) {
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
              <option value="0">Please select</option>
              <option value="1">HTML</option>
              <option value="2">CSS</option>
              <option value="3">Javascript</option>
            </select>

          </div>
          <div class="form-group">
            <div class="form-group">
              <label class="col-md-3 control-label">Inline Checkboxes</label>
              <div class="col-md-9">
                <label class="checkbox-inline" for="example-inline-checkbox1">
                  <input type="checkbox" id="example-inline-checkbox1" name="example-inline-checkbox1" value="option1"> HTML
                </label>
                <label class="checkbox-inline" for="example-inline-checkbox2">
                  <input type="checkbox" id="example-inline-checkbox2" name="example-inline-checkbox2" value="option2"> CSS
                </label>
                <label class="checkbox-inline" for="example-inline-checkbox3">
                  <input type="checkbox" id="example-inline-checkbox3" name="example-inline-checkbox3" value="option3"> Javascript
                </label>
                <label class="checkbox-inline" for="example-inline-checkbox3">
                  <input type="checkbox" id="example-inline-checkbox3" name="example-inline-checkbox3" value="option3"> Javascript
                </label>
                <label class="checkbox-inline" for="example-inline-checkbox3">
                  <input type="checkbox" id="example-inline-checkbox3" name="example-inline-checkbox3" value="option3"> Javascript
                </label>
              </div>

              <div class="col-md-9">
                <label class="checkbox-inline" for="example-inline-checkbox1">
                  <input type="checkbox" id="example-inline-checkbox1" name="example-inline-checkbox1" value="option1"> HTML
                </label>
                <label class="checkbox-inline" for="example-inline-checkbox2">
                  <input type="checkbox" id="example-inline-checkbox2" name="example-inline-checkbox2" value="option2"> CSS
                </label>
                <label class="checkbox-inline" for="example-inline-checkbox3">
                  <input type="checkbox" id="example-inline-checkbox3" name="example-inline-checkbox3" value="option3"> Javascript
                </label>
                <label class="checkbox-inline" for="example-inline-checkbox3">
                  <input type="checkbox" id="example-inline-checkbox3" name="example-inline-checkbox3" value="option3"> Javascript
                </label>
                <label class="checkbox-inline" for="example-inline-checkbox3">
                  <input type="checkbox" id="example-inline-checkbox3" name="example-inline-checkbox3" value="option3"> Javascript
                </label>
              </div>

            </div>
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
