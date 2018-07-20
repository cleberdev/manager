<?php
/* Smarty version 3.1.32, created on 2018-07-20 01:49:16
  from 'C:\Program Files (x86)\Ampps\www\manager\views\commons\footer.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b513f9cc1f092_35426878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53c60354630db6a339f5224a102dd1fe66609c92' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\manager\\views\\commons\\footer.html',
      1 => 1532044031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b513f9cc1f092_35426878 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- END Page Content -->

</div>
<!-- END Main Container -->
</div>
<!-- END Page Container -->
</div>
<!-- END Page Wrapper -->

<!-- jQuery, Bootstrap, jQuery plugins and Custom JS code -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['link_jquery']->value;?>
jquery-2.2.4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['link_jquery']->value;?>
bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['link_js']->value;?>
plugins.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['link_js']->value;?>
app.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['link_js']->value;?>
appCustomized.js"><?php echo '</script'; ?>
>
<!-- Load and execute javascript code used only in this page -->
        <!-- <?php echo '<script'; ?>
 src="js/pages/uiTables.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
>$(function(){ UiTables.init(); });<?php echo '</script'; ?>
> -->
        </body>
        </html>
<?php }
}
