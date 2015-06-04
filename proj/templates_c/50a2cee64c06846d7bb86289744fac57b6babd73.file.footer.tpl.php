<?php /* Smarty version Smarty-3.1.15, created on 2015-05-22 13:33:27
         compiled from "/opt/lbaw/***REMOVED***/public_html/proto/templates/common/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:295879914553fd88c028684-39336425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50a2cee64c06846d7bb86289744fac57b6babd73' => 
    array (
      0 => '/opt/lbaw/***REMOVED***/public_html/proto/templates/common/footer.tpl',
      1 => 1432294401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295879914553fd88c028684-39336425',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553fd88c02b5d5_75315618',
  'variables' => 
  array (
    'current_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553fd88c02b5d5_75315618')) {function content_553fd88c02b5d5_75315618($_smarty_tpl) {?>	<footer>
		<p>Copyright © 2015 Venn</p>
	</footer>

	<!-- jQuery -->
	<script type="text/javascript" src="../../assets/jquery/dist/jquery.min.js"></script>

	<!-- Bootstrap core JavaScript-->
	<script type="text/javascript" src="../../assets/frameworks/bootstrap/js/bootstrap.min.js"></script>


	<!-- Metis Menu Plugin JavaScript -->
	<script type="text/javascript" src="../../assets/frameworks/metisMenu/dist/metisMenu.min.js"></script>


    <!-- Custom Theme JavaScript -->
    <script type="text/javascript" src="../../assets/frameworks/sb-admin-2.js"></script>

    <!-- Custom actions -->
  	<script type="text/javascript" src="../../assets/js/home-scripts.js"></script>

    <!-- slide search field -->
    <script src="http://jquery-ui.googlecode.com/svn/tags/latest/ui/jquery.effects.core.js"></script>
    <script src="http://jquery-ui.googlecode.com/svn/tags/latest/ui/jquery.effects.slide.js"></script>

    <!-- drop down menus-->
    <script type="text/javascript" src="../../assets/frameworks/bootstrap/js/dropdowns-enhancement.js"></script>


    <?php $_smarty_tpl->tpl_vars['current_page'] = new Smarty_variable(explode("/~***REMOVED***/proto/pages/",$_SERVER['REQUEST_URI']), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['current_page']->value[1]=='home/home.php') {?>
        <script type="text/javascript" src="../../js/posts/post.js"></script>
        <script type="text/javascript" src="../../js/posts/comments.js"></script>
        <script type="text/javascript" src="../../js/users/home.js"></script>
    <?php } elseif ($_smarty_tpl->tpl_vars['current_page']->value[1]=='users/profile.php') {?>
        <script type="text/javascript" src="../../js/posts/post.js"></script>
        <script type="text/javascript" src="../../js/posts/comments.js"></script>
    <?php } elseif ($_smarty_tpl->tpl_vars['current_page']->value[1]=='users/tagview.php') {?>
        <script type="text/javascript" src="../../js/posts/post.js"></script>
        <script type="text/javascript" src="../../js/posts/comments.js"></script>
    <?php }?>

</body>
</html>
<?php }} ?>
