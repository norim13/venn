<?php /* Smarty version Smarty-3.1.15, created on 2015-05-07 22:16:11
         compiled from "/opt/lbaw/***REMOVED***/public_html/proto/templates/users/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1863502961553fd88bea2ac7-89696090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afe6fa3ce540d91ae4459fba12beb721a6a03f82' => 
    array (
      0 => '/opt/lbaw/***REMOVED***/public_html/proto/templates/users/register.tpl',
      1 => 1431029767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1863502961553fd88bea2ac7-89696090',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553fd88bed4d44_54024241',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553fd88bed4d44_54024241')) {function content_553fd88bed4d44_54024241($_smarty_tpl) {?><section id="register">
  <div class="blurb" id="sec4">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1>Not a member yet? Don't wait any longer!</h1>
          <div id="login_container" class="container">
            <div class="row">
              <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                  <div class="panel-body">
                    <form id="registerForm" role="form" method="post" enctype="multipart/form-data">
                      <fieldset>
                        <div class="form-group">
                          <input class="form-control" placeholder="Name" name="username" type="text">
                        </div>
                        <div class="form-group">
                          <input class="form-control" placeholder="E-mail" name="email" type="email">
                        </div>
                        <div class="form-group">
                          <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <div class="form-group">
                          <input class="form-control" placeholder="Repeat Password" name="confirmPassword" type="password" value="">
                        </div>
                        <div class="form-group">
                          <label class="radio-inline"><input type="radio" name="optradio"> Male </label>
                          <label class="radio-inline"><input type="radio" name="optradio"> Female </label>
                          <label class="radio-inline"><input type="radio" name="optradio"> Other </label>
                        </div>
                          <div id="error_message"></div>
                        <div id="login_btns">
                          <input class="btn btn-lg btn-success" type="submit" value="Sign Up">
                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </section>
<?php }} ?>
