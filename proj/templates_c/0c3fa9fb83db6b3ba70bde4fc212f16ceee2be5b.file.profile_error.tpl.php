<?php /* Smarty version Smarty-3.1.15, created on 2015-06-04 22:03:29
         compiled from "../../templates/users/profile_error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1226330951554a0f1f6eb4b3-96172418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c3fa9fb83db6b3ba70bde4fc212f16ceee2be5b' => 
    array (
      0 => '../../templates/users/profile_error.tpl',
      1 => 1433385644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1226330951554a0f1f6eb4b3-96172418',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_554a0f1f85f5f5_14839072',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554a0f1f85f5f5_14839072')) {function content_554a0f1f85f5f5_14839072($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'Profile Error'), 0);?>


<link href="../../css/profile.css" rel="stylesheet">
</head>
<body>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!-- based on http://www.bootply.com/AdHpVL3xRF-->
<div id="page-wrapper">
    <div class="panel col-lg-8 clearfix col-md-offset-2" style="margin-top:40px" >
        <h1 class=""><i class="fa fa-exclamation-triangle"></i> Error, there is no profile page on this link. </h1>
        <h2 class="text-center"> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">Go back </a></h2>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
