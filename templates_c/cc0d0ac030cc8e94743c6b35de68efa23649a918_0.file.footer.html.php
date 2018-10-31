<?php
/* Smarty version 3.1.32, created on 2018-10-31 17:44:26
  from '/Applications/AMPPS/www/manager/views/commons/footer.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd9e9fa940f00_62661471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc0d0ac030cc8e94743c6b35de68efa23649a918' => 
    array (
      0 => '/Applications/AMPPS/www/manager/views/commons/footer.html',
      1 => 1541007862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd9e9fa940f00_62661471 (Smarty_Internal_Template $_smarty_tpl) {
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
 src="<?php echo $_smarty_tpl->tpl_vars['link_notify']->value;?>
notify.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['link_notify']->value;?>
jquery-confirm.js"><?php echo '</script'; ?>
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

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['link_js']->value;?>
uiTables.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>$(function(){ UiTables.init(); });<?php echo '</script'; ?>
>
<!-- Load and execute javascript code used only in this page -->
<!-- <?php echo '<script'; ?>
 src="js/pages/uiTables.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>$(function(){ UiTables.init(); });<?php echo '</script'; ?>
> -->

	<!-- Load and execute javascript code used only in this page -->

</body>

</html>
<?php }
}
