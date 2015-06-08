<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 15:12:26
         compiled from "../../templates/admin/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1470588233554a147ac31004-62371265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2663ed643eb0036c54b4880c88aec87588f96609' => 
    array (
      0 => '../../templates/admin/admin.tpl',
      1 => 1433769118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1470588233554a147ac31004-62371265',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_554a147accb6a7_55272415',
  'variables' => 
  array (
    'reports' => 0,
    'BASE_URL' => 0,
    'report' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554a147accb6a7_55272415')) {function content_554a147accb6a7_55272415($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- Custom CSS -->
<link href="../../assets/frameworks/sb-admin.css" rel="stylesheet">
<link href="../../css/admin.css" rel="stylesheet">

</head>
<body>

<div id="wrapper">

    <?php echo $_smarty_tpl->getSubTemplate ("common/navbar_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div id="page-wrapper">
        <br>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-inbox fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"> <?php echo sizeof($_smarty_tpl->tpl_vars['reports']->value);?>
</div>
                                <div> User reports </div>
                            </div>
                        </div>
                    </div>
                   <!-- <a href="">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a> -->
                </div>
            </div>
            <!--
            <div class="col-lg-6 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-wrench fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">12</div>
                                <div> System reports</div>
                            </div>
                        </div>
                    </div>
                <!--    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                    <!--
                </div>
            </div>
-->

        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- /.panel -->
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <i class="fa fa-inbox fa-fw"></i> User report log
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
                                            <th>Post</th>

                                            <th>Post's User</th>
                                            <th>Text</th>
                                            <th>URL</th>
                                            <th>Report's Date</th>
                                            <th>Report's Message</th>
                                            <th>Processed</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php  $_smarty_tpl->tpl_vars['report'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['report']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reports']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['report']->key => $_smarty_tpl->tpl_vars['report']->value) {
$_smarty_tpl->tpl_vars['report']->_loop = true;
?>
                                            <tr>
                                            <td>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/posts/single_post.php?post_id=<?php echo $_smarty_tpl->tpl_vars['report']->value['post_id'];?>
">
                                                    View Post</a>
                                            </td>
                                            <td>
                                                <?php echo $_smarty_tpl->tpl_vars['report']->value['username'];?>

                                            </td>
                                            <td>
                                                <?php echo $_smarty_tpl->tpl_vars['report']->value['text'];?>

                                            </td>
                                            <td>
                                                <a href=<?php echo $_smarty_tpl->tpl_vars['report']->value['url'];?>
><?php echo $_smarty_tpl->tpl_vars['report']->value['url'];?>
</a>
                                            </td>
                                            <td>
                                                <?php echo $_smarty_tpl->tpl_vars['report']->value['date'];?>

                                            </td>
                                            <td>
                                                <?php echo $_smarty_tpl->tpl_vars['report']->value['message'];?>

                                            </td>
                                            <?php if ($_smarty_tpl->tpl_vars['report']->value['processed']) {?>
                                                <td>
                                                    Yes
                                                </td>
                                            <?php }?>
                                            <?php if (!$_smarty_tpl->tpl_vars['report']->value['processed']) {?>
                                                <td>
                                                    No
                                                </td>
                                            <?php }?>


                                            <td>
                                                <form id="form" action="../../actions/admin/process_report.php" method="post">
                                                    <input type="hidden" name="report_id" value="<?php echo $_smarty_tpl->tpl_vars['report']->value['id'];?>
">
                                                    <input type="submit" value="Ignore Post" class="btn">
                                                </form>

                                            </td>
                                            <td>
                                                <form id="form" action="../../actions/admin/delete_post.php" method="post">
                                                    <input type="hidden" name="post_id" value=<?php echo $_smarty_tpl->tpl_vars['report']->value['post_id'];?>
>
                                                    <input type="submit" value="Delete Post" class="btn btn-danger">
                                                </form>

                                            </td>
                                            </tr><?php } ?>
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


    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

</body>

<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
