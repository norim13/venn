<?php /* Smarty version Smarty-3.1.15, created on 2015-06-04 01:56:38
         compiled from "../../templates/posts/feed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12932900205548fadd4c4b37-22897546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20d04a8ee31c59f04881707dbcc14fd15f66bcce' => 
    array (
      0 => '../../templates/posts/feed.tpl',
      1 => 1433373226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12932900205548fadd4c4b37-22897546',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5548fadd55e876_03005966',
  'variables' => 
  array (
    'recent_posts' => 0,
    'n' => 0,
    'user_circles' => 0,
    'circle' => 0,
    'circles_posts' => 0,
    'user_in_circle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5548fadd55e876_03005966')) {function content_5548fadd55e876_03005966($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/opt/lbaw/***REMOVED***/public_html/final/lib/smarty/plugins/function.counter.php';
?><?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Venn - Feed"), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="page-wrapper">
    <div class=" col-lg-6 clearfix">
        <h1>People</h1>
        <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recent_posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
            <?php echo $_smarty_tpl->getSubTemplate ("posts/post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php } ?>
    </div>

    <!-- right column -->
    <div class=" col-lg-6 clearfix">
        <h1>Circles
            <div class="dropdown" style="float:right">
                <div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle pull-right" data-placeholder="Visibility" >Circles <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-form">
                        <?php echo smarty_function_counter(array('start'=>0,'skip'=>1,'print'=>false),$_smarty_tpl);?>

                        <?php ob_start();?><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable($_tmp1, null, 0);?>
                        <li><input id="ex3_<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" name="ex3" value="<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" type="checkbox"><label for="ex3_<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
">Public</label></li>
                        <?php  $_smarty_tpl->tpl_vars['circle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['circle']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_circles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['circle']->key => $_smarty_tpl->tpl_vars['circle']->value) {
$_smarty_tpl->tpl_vars['circle']->_loop = true;
?>
                            <?php ob_start();?><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable($_tmp2, null, 0);?>
                            <li><input id="ex3_<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" name="ex3" value="<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" type="checkbox"><label for="ex3_<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['circle']->value['name'];?>
</label></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </h1>

        <!--publication-->
        <?php  $_smarty_tpl->tpl_vars['user_in_circle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user_in_circle']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['circles_posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user_in_circle']->key => $_smarty_tpl->tpl_vars['user_in_circle']->value) {
$_smarty_tpl->tpl_vars['user_in_circle']->_loop = true;
?>
            <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_in_circle']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                <?php echo $_smarty_tpl->getSubTemplate ("posts/post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php } ?>
        <?php } ?>

        <!-- /.row -->
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("posts/voteModal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
