<?php /* Smarty version Smarty-3.1.15, created on 2015-05-19 14:57:32
         compiled from "/opt/lbaw/lbaw1446/public_html/proto/templates/users/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1800086821553fd88be048d1-34893682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e94c6189ff68e8d9c6aaeeed2797bbaf6e878be' => 
    array (
      0 => '/opt/lbaw/lbaw1446/public_html/proto/templates/users/login.tpl',
      1 => 1431878589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1800086821553fd88be048d1-34893682',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553fd88be980b4_16229116',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553fd88be980b4_16229116')) {function content_553fd88be980b4_16229116($_smarty_tpl) {?>
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
                                <form role="form" id="loginForm" method="post" enctype="multipart/form-data">
                                    <fieldset>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="E-mail" name="email" type="email">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                        </div>
                                        <div id="error_message"></div>
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
