<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 15:11:20
         compiled from "../../templates/admin/database_posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59463060055521b2fe34425-55036001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ee12f082935eefb09cdc976d9c2e6b1592fb3d4' => 
    array (
      0 => '../../templates/admin/database_posts.tpl',
      1 => 1433769050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59463060055521b2fe34425-55036001',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55521b2ff20e58_03152103',
  'variables' => 
  array (
    'posts' => 0,
    'BASE_URL' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55521b2ff20e58_03152103')) {function content_55521b2ff20e58_03152103($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/navbar_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div id="page-wrapper">
    <br>
    <h3>DataBase - Posts</h3>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <!-- /.panel -->
            <div class="panel panel-info">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <!--
                                        <th>Name</th>
                                        <th>Registration</th>
                                        <th>Gender</th>
                                        <th>Warnings</th>
                                        <th>Comments</th>
                                        <th>Reposts</th>
                                        <th>Upvotes</th>
                                        <th>Downvotes</th>-->
                                        <th>Post Date</th>
                                        <th>Start Date</th>
                                        <th>Expiration Date</th>
                                        <th>Vote Diference</th>
                                        <th>Number of Comments</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                                        <tr>
                                            <td>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/posts/single_post.php?post_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
                                                    <?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
</a>
                                            </td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['post']->value['name'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['post']->value['post_date'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['post']->value['start_date'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['post']->value['expiration_date'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['post']->value['votedifference'];?>
</td>
                                            <td>
                                                <?php if ($_smarty_tpl->tpl_vars['post']->value['number_of_comments']==null) {?>
                                                    0
                                                <?php }?>
                                                <?php echo $_smarty_tpl->tpl_vars['post']->value['number_of_comments'];?>
</td>
                                            <td>
                                                <form id="form" action="../../actions/admin/delete_post.php" method="post">
                                                    <input type="hidden" name="post_id" value=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
>
                                                    <input type="submit" value="Delete" class="btn btn-danger">
                                                </form>

                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.col-lg-4 (nested) -->
                        <div class="col-lg-8">
                            <div id="morris-bar-chart"></div>
                        </div>
                        <!-- /.col-lg-8 (nested) -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->

            <!-- /.panel -->
        </div>

    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
