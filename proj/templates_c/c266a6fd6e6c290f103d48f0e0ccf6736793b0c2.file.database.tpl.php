<?php /* Smarty version Smarty-3.1.15, created on 2015-05-19 17:24:08
         compiled from "../../templates/admin/database.tpl" */ ?>
<?php /*%%SmartyHeaderCode:824514251554a161f2fd102-43420198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c266a6fd6e6c290f103d48f0e0ccf6736793b0c2' => 
    array (
      0 => '../../templates/admin/database.tpl',
      1 => 1432049037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '824514251554a161f2fd102-43420198',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_554a161f578800_38259664',
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
    'posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554a161f578800_38259664')) {function content_554a161f578800_38259664($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/navbar_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div id="page-wrapper">
            <br>
            <!-- /.row -->
         
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                                       <!-- /.panel -->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            User database - Most Recent
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
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
                                         See more
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

              <div class="row">
                <div class="col-lg-12">
                                       <!-- /.panel -->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                             Posts database - Most Recent
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
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
                                                    <td><?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
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
                                         See more
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
