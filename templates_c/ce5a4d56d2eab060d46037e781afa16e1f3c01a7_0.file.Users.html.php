<?php
/* Smarty version 3.1.32, created on 2018-07-21 01:03:11
  from 'C:\Program Files (x86)\Ampps\www\manager\views\Users.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b52864fdd61c6_57617514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce5a4d56d2eab060d46037e781afa16e1f3c01a7' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\manager\\views\\Users.html',
      1 => 1532134985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b52864fdd61c6_57617514 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Header -->
<!-- In the PHP version you can set the following options from inc/config file -->
<!--
                        Available header.navbar classes:

                        'navbar-default'            for the default light header
                        'navbar-inverse'            for an alternative dark header

                        'navbar-fixed-top'          for a top fixed header (fixed main sidebar with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                            'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                        'navbar-fixed-bottom'       for a bottom fixed header (fixed main sidebar with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                            'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
                          -->
                          <header class="navbar navbar-inverse navbar-fixed-top">
                            <!-- Left Header Navigation -->
                            <ul class="nav navbar-nav-custom">
                              <!-- Main Sidebar Toggle Button -->
                              <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                  <i class="fa fa-ellipsis-v fa-fw animation-fadeInRight" id="sidebar-toggle-mini"></i>
                                  <i class="fa fa-bars fa-fw animation-fadeInRight" id="sidebar-toggle-full"></i>
                                </a>
                              </li>
                              <!-- END Main Sidebar Toggle Button -->

                              <!-- Header Link -->
                              <li class="hidden-xs animation-fadeInQuick">
                                <a href=""><strong>Usuários</strong></a>
                              </li>
                              <!-- END Header Link -->
                            </ul>
                            <!-- END Left Header Navigation -->

                            <!-- Right Header Navigation -->
                            <ul class="nav navbar-nav-custom pull-right">
                              <!-- Search Form -->
                              <li>
                                <form action="page_ready_search_results.html" method="post" class="navbar-form-custom">
                                  <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Search..">
                                </form>
                              </li>
                              <!-- END Search Form -->

                              <!-- Alternative Sidebar Toggle Button -->
                              <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt');this.blur();">
                                  <i class="gi gi-settings"></i>
                                </a>
                              </li>
                              <!-- END Alternative Sidebar Toggle Button -->

                              <!-- User Dropdown -->
                              <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                  <img src="<?php echo $_smarty_tpl->tpl_vars['link_img']->value;?>
placeholders/avatars/avatar9.jpg" alt="avatar">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                  <li class="dropdown-header">
                                    <strong>ADMINISTRATOR</strong>
                                  </li>
                                  <li>
                                    <a href="page_app_email.html">
                                      <i class="fa fa-inbox fa-fw pull-right"></i>
                                      Inbox
                                    </a>
                                  </li>
                                  <li>
                                    <a href="page_app_social.html">
                                      <i class="fa fa-pencil-square fa-fw pull-right"></i>
                                      Profile
                                    </a>
                                  </li>
                                  <li>
                                    <a href="page_app_media.html">
                                      <i class="fa fa-picture-o fa-fw pull-right"></i>
                                      Media Manager
                                    </a>
                                  </li>
                                  <li class="divider">
                                    <li>
                                      <li>
                                        <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt');">
                                          <i class="gi gi-settings fa-fw pull-right"></i>
                                          Settings
                                        </a>
                                      </li>
                                      <li>
                                        <a href="page_ready_lock_screen.html">
                                          <i class="gi gi-lock fa-fw pull-right"></i>
                                          Lock Account
                                        </a>
                                      </li>
                                      <li>
                                        <a href="page_ready_login.html">
                                          <i class="fa fa-power-off fa-fw pull-right"></i>
                                          Log out
                                        </a>
                                      </li>
                                    </ul>
                                  </li>
                                  <!-- END User Dropdown -->
                                </ul>
                                <!-- END Right Header Navigation -->
                              </header>
                              <!-- END Header -->

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
                                    <a href="#modal-add-user" class="btn btn-sm btn-success" data-toggle="modal"><i class="fa fa-plus"></i>Adicionar</a>

      <!--    <a href="javascript:void(0)" class="btn btn-sm btn-default">A</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-default">B</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-default">C</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-default">D</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-default">E</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-default">F</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-default">G</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-default">H</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-default">I</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-default">J</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-default">K</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-default">L</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-default">M</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-default">N</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-default">O</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-default">P</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-default">Q</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-default">R</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-default">S</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-default">T</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-default">V</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-default">U</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-default">W</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-default">X</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-default">Y</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-default">Z</a> -->
                                      </div>
                                    </div>
                                    <!-- END Contacts Header -->
                                    <!-- Contacts Content -->
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['response']->value, 'curr_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['curr_id']->value) {
?>
                                    <div class="col-sm-6 col-md-4 col-lg-3 clearfix">
                                      <a href="javascript:void(0)" class="widget">
                                        <div class="widget-content text-right clearfix">
                                          <img src="<?php echo $_smarty_tpl->tpl_vars['link_img']->value;?>
placeholders/avatars/avatar9.jpg" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar pull-left">
                                          <h3 class="widget-heading h4"><strong><?php echo $_smarty_tpl->tpl_vars['curr_id']->value->name;?>
</strong></h3>
                                          <span class="text-muted"><?php echo $_smarty_tpl->tpl_vars['curr_id']->value->type;?>
</span>
                                        </div>
                                      </a>
                                    </div>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                    <!-- END Contacts Content -->
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
                                            <input type="hidden" value="Users" name="module">
                                            <input type="hidden" value="add" name="action">
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
                                                <input type="text" id="add-contact-name" name="name" class="form-control" placeholder="Enter Full Name..">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-xs-3 control-label" for="add-contact-email">Email</label>
                                              <div class="col-xs-9">
                                                <input type="email" id="add-contact-email" name="email" class="form-control" placeholder="Enter Email..">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-xs-3 control-label" for="add-contact-phone">Phone</label>
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
                                                <input type="password" id="add-pass-mobile" name="password" class="form-control data-loading-text=" Loading... " placeholder="Entre com a senha.. ">
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
<!-- END Add Contact Modal --><?php }
}
