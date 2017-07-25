<?php /* Smarty version Smarty-3.1.15, created on 2015-04-28 20:31:24
         compiled from "/opt/lbaw/lbaw1446/public_html/frmk/templates/users/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:991329267553fce12e79ba2-35873533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5e38ec308ffa13f2f8dd9efea611e30aab4d25d' => 
    array (
      0 => '/opt/lbaw/lbaw1446/public_html/frmk/templates/users/login.tpl',
      1 => 1430245879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '991329267553fce12e79ba2-35873533',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553fce12efd516_32004717',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553fce12efd516_32004717')) {function content_553fce12efd516_32004717($_smarty_tpl) {?>  
  <section id="login">
  <div id="sec1" class="blurb">
    <div class="container">
      <div id="login_container" class="container">
        <h1>Log In</h1>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="login-panel panel panel-default">
              <div class="panel-body">
                <form role="form"  action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post" enctype="multipart/form-data">
                  <fieldset>
                    <div class="form-group">
                      <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                    </div>
                    <div class="form-group">
                      <input class="form-control" placeholder="Password" name="password" type="password" value="">
                    </div>

                    <div id="login_btns">
                      <a id="signup_back" href="#sec4"> Create an account </a>
                      <input class="btn btn-lg btn-success" type="submit" value="Login">
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
    </div>
  </div>
      </section>

<?php }} ?>
