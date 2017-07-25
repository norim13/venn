<?php /* Smarty version Smarty-3.1.15, created on 2015-04-28 04:23:26
         compiled from "/opt/lbaw/lbaw1446/public_html/frmk/templates/users/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1133393632553ee41aee1307-08582462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69acd338f9c12f938a0a661bfaa2d199f9ca697a' => 
    array (
      0 => '/opt/lbaw/lbaw1446/public_html/frmk/templates/users/register.tpl',
      1 => 1430187803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1133393632553ee41aee1307-08582462',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553ee41b05feb0_77789543',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'FORM_VALUES' => 0,
    'FIELD_ERRORS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553ee41b05feb0_77789543')) {function content_553ee41b05feb0_77789543($_smarty_tpl) {?><!--<?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<section id="register">
  <h2>Register</h2>

  <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/register.php" method="post" enctype="multipart/form-data">
    <label>Name:<br> 
      <input type="text" name="realname" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['realname'];?>
"> 
      <span class="field_error"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['username'];?>
</span>
    </label>
    <br>
    <label>Username:<br> 
      <input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['username'];?>
">
    </label>
    <br>
    <label>Password:<br> 
      <input type="password" name="password" value="">
    </label>
    <br>
    <label>Photo:<br>
      <input type="file" name="photo">
    </label>
    <input type="submit" value="Register">
  </form>

</section>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



-->

<section id="register">
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
                    <form role="form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/register.php" method="post" enctype="multipart/form-data">
                      <fieldset>
                        <div class="form-group">
                          <input class="form-control" placeholder="Name" name="username" type="text" autofocus>
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
                        <div id="login_btns">
                          <!--<a id="signup_back" href="index.php?page=login"> Back </a>-->
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
