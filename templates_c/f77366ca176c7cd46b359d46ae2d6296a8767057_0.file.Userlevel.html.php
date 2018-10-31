<?php
/* Smarty version 3.1.32, created on 2018-10-31 17:53:20
  from '/Applications/AMPPS/www/manager/views/Userlevel.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd9ec107c8e01_92398325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f77366ca176c7cd46b359d46ae2d6296a8767057' => 
    array (
      0 => '/Applications/AMPPS/www/manager/views/Userlevel.html',
      1 => 1541008398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd9ec107c8e01_92398325 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div class="msnResponse">

    </div>
    <!-- Contacts Content -->
    <div class="row">










      <div class="block full">
          <div class="block-title">
              <h2>Datatables</h2>
          </div>
          <div class="table-responsive">
              <table id="example-datatable" class="table table-striped table-bordered table-vcenter">
                  <thead>
                      <tr>
                          <th class="text-center" style="width: 50px;">ID</th>
                          <th>User</th>
                          <th>Email</th>
                          <th style="width: 120px;">Status</th>
                          <th class="text-center" style="width: 75px;"><i class="fa fa-flash"></i></th>
                      </tr>
                  </thead>
                  <tbody>
                      
                      <tr>
                          <td class="text-center">28</td>
                          <td><strong>AppUser28</strong></td>
                          <td>app.user28@example.com</td>
                          <td><span class="label label-info">On hold..</span></td>
                          <td class="text-center">
                              <a href="javascript:void(0)" data-toggle="tooltip" title="Edit User" class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                              <a href="javascript:void(0)" data-toggle="tooltip" title="Delete User" class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
                          </td>
                      </tr>
                      <tr>
                          <td class="text-center">29</td>
                          <td><strong>AppUser29</strong></td>
                          <td>app.user29@example.com</td>
                          <td><span class="label label-danger">Disabled</span></td>
                          <td class="text-center">
                              <a href="javascript:void(0)" data-toggle="tooltip" title="Edit User" class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                              <a href="javascript:void(0)" data-toggle="tooltip" title="Delete User" class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
                          </td>
                      </tr>
                      <tr>
                          <td class="text-center">30</td>
                          <td><strong>AppUser30</strong></td>
                          <td>app.user30@example.com</td>
                          <td><span class="label label-success">Active</span></td>
                          <td class="text-center">
                              <a href="javascript:void(0)" data-toggle="tooltip" title="Edit User" class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                              <a href="javascript:void(0)" data-toggle="tooltip" title="Delete User" class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
                          </td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </div>













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

        <form action="Userlevel" method="post" class="form-bordered" id="Userlevel">
          <!-- input that autorized of system wear the recurse the validation -->
          <input type="hidden" name="module" value="Userlevel">

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
