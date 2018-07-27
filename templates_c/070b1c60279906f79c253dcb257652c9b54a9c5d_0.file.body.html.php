<?php
/* Smarty version 3.1.32, created on 2018-07-27 18:24:11
  from '/Applications/AMPPS/www/manager/views/commons/body.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5b634b4aadf9_74465791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '070b1c60279906f79c253dcb257652c9b54a9c5d' => 
    array (
      0 => '/Applications/AMPPS/www/manager/views/commons/body.html',
      1 => 1532715722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5b634b4aadf9_74465791 (Smarty_Internal_Template $_smarty_tpl) {
?><body>
  <!-- Page Wrapper -->
  <!-- In the PHP version you can set the following options from inc/config file -->
  <!--
  Available classes:

  'page-loading'      enables page preloader
  -->
  <div id="page-wrapper" class="page-loading">
    <!-- Preloader -->
    <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
    <!-- Used only if page preloader enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
    <div class="preloader">
      <div class="inner">
        <!-- Animation spinner for all modern browsers -->
        <div class="preloader-spinner themed-background hidden-lt-ie10"></div>

        <!-- Text for IE9 -->
        <h3 class="text-primary visible-lt-ie10"><strong>Loading..</strong></h3>
      </div>
    </div>
    <!-- END Preloader -->

    <!-- Page Container -->
    <!-- In the PHP version you can set the following options from inc/config file -->
    <!--
  Available #page-container classes:

  'sidebar-light'                                 for a light main sidebar (You can add it along with any other class)

  'sidebar-visible-lg-mini'                       main sidebar condensed - Mini Navigation (> 991px)
  'sidebar-visible-lg-full'                       main sidebar full - Full Navigation (> 991px)

  'sidebar-alt-visible-lg'                        alternative sidebar visible by default (> 991px) (You can add it along with any other class)

  'header-fixed-top'                              has to be added only if the class 'navbar-fixed-top' was added on header.navbar
  'header-fixed-bottom'                           has to be added only if the class 'navbar-fixed-bottom' was added on header.navbar

  'fixed-width'                                   for a fixed width layout (can only be used with a static header/main sidebar layout)

  'enable-cookies'                                enables cookies for remembering active color theme when changed from the sidebar links (You can add it along with any other class)
  -->
    <div id="page-container" class="header-fixed-top sidebar-visible-lg-full">
      <!-- Alternative Sidebar -->
      <div id="sidebar-alt" tabindex="-1" aria-hidden="true">
        <!-- Toggle Alternative Sidebar Button (visible only in static layout) -->
        <a href="javascript:void(0)" id="sidebar-alt-close" onclick="App.sidebar('toggle-sidebar-alt');"><i class="fa fa-times"></i></a>

        <!-- Wrapper for scrolling functionality -->
        <div id="sidebar-scroll-alt">
          <!-- Sidebar Content -->
          <div class="sidebar-content">
            <!-- Sidebar Section -->
            <div class="sidebar-section">
              <h2 class="text-light">Header</h2>
              <p>Section content..</p>
            </div>
            <!-- END Sidebar Section -->
          </div>
          <!-- END Sidebar Content -->
        </div>
        <!-- END Wrapper for scrolling functionality -->
      </div>
      <!-- END Alternative Sidebar -->

      <!-- Main Sidebar -->
      <div id="sidebar">
        <!-- Sidebar Brand -->
        <div id="sidebar-brand" class="themed-background">
          <a href="Dashboard" class="sidebar-title">
  <i class="fa fa-cube"></i> <span class="sidebar-nav-mini-hide"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<strong></strong></span>
  </a>
        </div>
        <!-- END Sidebar Brand -->

        <!-- Wrapper for scrolling functionality -->
        <div id="sidebar-scroll">
          <!-- Sidebar Content -->
          <div class="sidebar-content">
            <!-- Sidebar Navigation -->
            <ul class="sidebar-nav">
              <li>
                <a href="javascript:void(0)" class="active"><i class="gi gi-compass sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Navegar</span></a>
              </li>
              <li class="sidebar-separator">
                <i class="fa fa-ellipsis-h"></i>
              </li>
              <li>
                <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-cog sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Sistema</span></a>
                <ul>
                  <li>
                    <a href="Users">Usuários</a>
                  </li>
                  <li>
                    <a href="Permission">Permissões</a>
                  </li>
                </ul>
              </li>
            </ul>
            <!-- END Sidebar Navigation -->


          </div>
          <!-- END Sidebar Content -->
        </div>
        <!-- END Wrapper for scrolling functionality -->

        <!-- Sidebar Extra Info -->
        <!-- END Sidebar Extra Info -->
      </div>
      <!-- END Main Sidebar -->

      <!-- Main Container -->
      <div id="main-container">
        <!-- Header -->
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
              <a href=""><strong>DASHBOARD</strong></a>
            </li>
            <!-- END Header Link -->
          </ul>
          <!-- END Left Header Navigation -->

          <!-- Right Header Navigation -->
          <ul class="nav navbar-nav-custom pull-right">
            <!-- Search Form -->
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
placeholders/avatars/avatar.jpg" alt="avatar">
  </a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li class="dropdown-header">
                  <strong>ADMINISTRATOR</strong>
                </li>
                <li>
                  <a href="javascript:void(0)">
    <i class="fa fa-inbox fa-fw pull-right"></i>
    Link #1
  </a>
                </li>
                <li>
                  <a href="javascript:void(0)">
    <i class="fa fa-pencil-square fa-fw pull-right"></i>
    Link #2
  </a>
                </li>
                <li>
                  <a href="javascript:void(0)">
    <i class="fa fa-picture-o fa-fw pull-right"></i>
    Link #3
  </a>
                </li>
                <li class="divider">
                  <li>
                    <li>
                      <a href="javascript:void(0)">
        <i class="gi gi-settings fa-fw pull-right"></i>
        Link #1
    </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)">
        <i class="gi gi-lock fa-fw pull-right"></i>
        Link #2
    </a>
                    </li>
              </ul>
              </li>
              <!-- END User Dropdown -->
          </ul>
          <!-- END Right Header Navigation -->
        </header>
        <!-- END Header --><?php }
}
