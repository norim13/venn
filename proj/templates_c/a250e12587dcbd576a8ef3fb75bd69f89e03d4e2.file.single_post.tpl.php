<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 21:11:44
         compiled from "../../templates/posts/single_post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:662351503555c5b996e2597-94353754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a250e12587dcbd576a8ef3fb75bd69f89e03d4e2' => 
    array (
      0 => '../../templates/posts/single_post.tpl',
      1 => 1433790665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '662351503555c5b996e2597-94353754',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555c5b997bb4f0_21255891',
  'variables' => 
  array (
    'post' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555c5b997bb4f0_21255891')) {function content_555c5b997bb4f0_21255891($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Venn - Post"), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="page-wrapper">
    <?php if ($_smarty_tpl->tpl_vars['post']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("posts/post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } else { ?>
        <div class="panel col-lg-8 clearfix col-md-offset-2" style="margin-top:40px" >
            <h1><i class="fa fa-exclamation-triangle"></i> Error, there is no post with that id! </h1>
            <h2 class="text-center"> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"> Go back </a></h2>
        </div>
    <?php }?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("posts/reportModal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("posts/voteModal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('posts/edit_post_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script>
    $('.btn-comments').click();
</script><?php }} ?>
