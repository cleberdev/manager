<?php
/* Smarty version 3.1.32, created on 2018-07-29 00:53:19
  from 'C:\Program Files (x86)\Ampps\www\manager\views\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5d0fffb38c36_71965267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40d2302831d0cbd7f045196b539f9c856c1430d8' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\manager\\views\\login.html',
      1 => 1532824515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5d0fffb38c36_71965267 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Login Container -->
<div id="login-container">
  <!-- Login Header -->
  <h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
        <i class="fa fa-cube"></i> <strong>Bem-vindo ao Sistema</strong>
    </h1>
  <!-- END Login Header -->

  <!-- Login Block -->
  <div class="block animation-fadeInQuickInv">
    <!-- Login Title -->
    <div class="block-title">
      <div class="block-options pull-right">
        <a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary" data-toggle="tooltip" data-placement="left" title="Esqueci Minha Senha?"><i class="fa fa-exclamation-circle"></i></a>
        <a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary" data-toggle="tooltip" data-placement="left" title="Criar nova conta"><i class="fa fa-plus"></i></a>
      </div>
      <h2>Faça o Login</h2>
    </div>
    <!-- END Login Title -->

    <!-- Login Form -->
    <form id="form-login" action="Login" method="post" class="form-horizontal">
      <div class="form-group">
        <div class="col-xs-12">
          <input type="text" id="login-email" name="login-email" class="form-control" placeholder="Your email..">
        </div>
      </div>
      <div class="form-group">
        <div class="col-xs-12">
          <input type="password" id="login-password" name="login-password" class="form-control" placeholder="Your password..">
        </div>
      </div>
      <div class="form-group form-actions">
        <div class="col-xs-8">
          <label class="csscheckbox csscheckbox-primary">
                        <input type="checkbox" id="login-remember-me" name="login-remember-me">
                        <span></span>
                    </label> Lembrar Senha?
        </div>
        <div class="col-xs-4 text-right">
          <button type="submit" class="btn btn-effect-ripple btn-sm btn-primary"><i class="fa fa-check"></i> Entar</button>
        </div>
      </div>
    </form>
    <!-- END Login Form -->
  </div>
  <!-- END Login Block -->

  <!-- Footer -->
  <footer class="text-muted text-center animation-pullUp">
    <small><span id="year-copy"></span> &copy; <a href="http://goo.gl/RcsdAh" target="_blank">Sistema 1.0</a></small>
  </footer>
  <!-- END Footer -->
</div>
<!-- END Login Container --><?php }
}
