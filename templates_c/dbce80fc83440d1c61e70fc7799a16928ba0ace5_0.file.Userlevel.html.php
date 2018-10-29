<?php
/* Smarty version 3.1.32, created on 2018-10-10 01:11:00
  from 'C:\Program Files (x86)\Ampps\www\manager\views\Userlevel.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bbd51a4643ec7_85286397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbce80fc83440d1c61e70fc7799a16928ba0ace5' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\manager\\views\\Userlevel.html',
      1 => 1539133855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbd51a4643ec7_85286397 (Smarty_Internal_Template $_smarty_tpl) {
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

  </div>
  <!-- END Contacts Header -->
  <div class="block">
    <!-- Example Title -->
    <div class="block-title">

    </div>
    <!-- END Example Title -->

    <!-- Contacts Content -->
    <div class="row">

      <!-- Labels on top Form Block -->
      <div class="block">
        <!-- Labels on top Form Title -->
        <div class="block-title">
          <div class="block-options pull-right">
            <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class">Borderless</a>
          </div>
          <h2>Cadastro do tipo de acesso</h2>

        </div>
        <!-- END Labels on top Form Title -->

        <!-- Labels on top Form Content -->
        <?php $_smarty_debug = new Smarty_Internal_Debug;
 $_smarty_debug->display_debug($_smarty_tpl);
unset($_smarty_debug);
?>
        
        <form action="Userlevel" method="post" class="form-bordered" onsubmit="return true;">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msnErr']->value, 'curr_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['curr_id']->value) {
?>
          <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['curr_id']->value->string;?>
" name="msn">
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <div class="form-group">
            <label for="example-nf-email">Nome do tipo</label>
            <input type="text" name="typeLevel" id="example-nf-email" name="example-nf-email" class="form-control">
            <span class="help-block">Por favor entre com o nome para o tipo</span>
          </div>
          <div class="form-group">
            <label for="example-nf-password">Descrição</label>
            <textarea id="example-textarea-input" name="description" rows="7" class="form-control" placeholder="Description.."></textarea>
            <span class="help-block">Por favor entre com a descrição</span>
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
