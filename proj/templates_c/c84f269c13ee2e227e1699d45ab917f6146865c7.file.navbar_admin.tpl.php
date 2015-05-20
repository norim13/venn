<?php /* Smarty version Smarty-3.1.15, created on 2015-05-12 17:27:55
         compiled from "/opt/lbaw/***REMOVED***/public_html/proto/templates/common/navbar_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1020311912555218ff8ddc33-45893378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c84f269c13ee2e227e1699d45ab917f6146865c7' => 
    array (
      0 => '/opt/lbaw/***REMOVED***/public_html/proto/templates/common/navbar_admin.tpl',
      1 => 1431444427,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1020311912555218ff8ddc33-45893378',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555218ff8e8bb9_71905795',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555218ff8e8bb9_71905795')) {function content_555218ff8e8bb9_71905795($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<!-- Custom CSS -->
<link href="../../assets/frameworks/sb-admin.css" rel="stylesheet">
<link href="../../css/admin.css" rel="stylesheet">


<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> Venn admin panel </a>
        </div>
        <!-- /.navbar-header -->

        <div class="logoutButton">
            <a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
        </div>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                        <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                        </div>
                        <div>
                            <div class="radio">
                                <label><input type="radio" name="optradio">Users</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="optradio">Posts</label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="main_panel.php"><i class="fa fa-cogs fa-fw"></i> Main panel</a>
                    </li>

                    <li>
                        <a href="database.php"><i class="fa fa-database fa-fw"></i> Databases<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                            <li>
                                <a href="users_db.php"> Users  </a>
                            </li>
                            <li>
                                <a href="posts_db.php"> Posts </a>
                                <!-- /.nav-third-level -->
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>


                    <li>
                        <a href="stats.php"><i class="fa fa-bar-chart-o fa-fw"></i> Statistics <span class="fa arrow"></span></a>

                        <!-- /.nav-second-level -->
                    </li>


                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav><?php }} ?>
