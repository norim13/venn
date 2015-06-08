<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 21:24:12
         compiled from "../../templates/posts/tagview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1801982618555b334c9e54a4-43217361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30c5c43be369b52cf6c025b1a06444e05fa21722' => 
    array (
      0 => '../../templates/posts/tagview.tpl',
      1 => 1433790691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1801982618555b334c9e54a4-43217361',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555b334cac9a29_58319129',
  'variables' => 
  array (
    'tagname' => 0,
    'tagposts' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555b334cac9a29_58319129')) {function content_555b334cac9a29_58319129($_smarty_tpl) {?><?php ob_start();?><?php echo ("Venn - ").($_smarty_tpl->tpl_vars['tagname']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp1), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="page-wrapper">
    <?php if ($_smarty_tpl->tpl_vars['tagposts']->value) {?>
        <div class=" col-lg-6 clearfix">
            <h1><?php echo $_smarty_tpl->tpl_vars['tagname']->value;?>
</h1>
            <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tagposts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                <?php echo $_smarty_tpl->getSubTemplate ("posts/post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php } ?>
        </div>
    <?php } else { ?>
        <div class="panel col-lg-8 clearfix col-md-offset-2" style="margin-top:40px" >
            <h1 class=""><i class="fa fa-exclamation-triangle"></i> Error, there are no posts with that tag! </h1>
            <h2 class="text-center"> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">Go back </a></h2>
        </div>
    <?php }?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("posts/reportModal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("posts/voteModal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('posts/edit_post_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
