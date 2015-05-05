<?php /* Smarty version Smarty-3.1.15, created on 2015-04-28 20:59:23
         compiled from "/opt/lbaw/***REMOVED***/public_html/proto/templates/common/menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1948909893553fd88c014ea5-34624598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6599562a4ab899029e425e6151742f2ca9e5d85f' => 
    array (
      0 => '/opt/lbaw/***REMOVED***/public_html/proto/templates/common/menu_logged_out.tpl',
      1 => 1386927924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1948909893553fd88c014ea5-34624598',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553fd88c024291_96923532',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553fd88c024291_96923532')) {function content_553fd88c024291_96923532($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php">Register</a>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
  <input type="text" placeholder="username" name="username">
  <input type="password" placeholder="password" name="password">
  <input type="submit" value=">">
</form>
<?php }} ?>
