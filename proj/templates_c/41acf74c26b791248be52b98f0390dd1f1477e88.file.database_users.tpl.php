<?php /* Smarty version Smarty-3.1.15, created on 2015-05-20 01:49:59
         compiled from "../../templates/admin/database_users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122768832655521bfe9f83b3-03134152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41acf74c26b791248be52b98f0390dd1f1477e88' => 
    array (
      0 => '../../templates/admin/database_users.tpl',
      1 => 1432079386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122768832655521bfe9f83b3-03134152',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55521bfea71db4_53939291',
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55521bfea71db4_53939291')) {function content_55521bfea71db4_53939291($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/navbar_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div id="page-wrapper">
    <br>
    <h3>DataBase - Users</h3>
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
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>Last Login</th>
                                        <th>Signup Date</th>
                                        <th>Number of Posts</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['gender'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['last_login'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['signup_login'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['number_of_post'];?>
</td>
                                            <td>
                                                <?php if ($_smarty_tpl->tpl_vars['user']->value['id']!=1) {?>


                                                    <form id="form" action="../../actions/admin/delete_user.php" method="post">
                                                        <input type="hidden" name="user_id" value=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
>
                                                        <input type="submit" value="Delete" class="btn btn-danger">
                                                    </form>
                                                <?php }?>

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
