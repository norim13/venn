<?php /* Smarty version Smarty-3.1.15, created on 2015-04-22 13:53:04
         compiled from "/opt/lbaw/***REMOVED***/public_html/frmk/templates/common/menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80040360155378ba0a61a74-40018577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be8bc25868761d9e2e785351d15ae48e949603bf' => 
    array (
      0 => '/opt/lbaw/***REMOVED***/public_html/frmk/templates/common/menu_logged_in.tpl',
      1 => 1386927924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80040360155378ba0a61a74-40018577',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55378ba0afc3f4_33821447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55378ba0afc3f4_33821447')) {function content_55378ba0afc3f4_33821447($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a>
<span class="username"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</span>
<?php }} ?>
