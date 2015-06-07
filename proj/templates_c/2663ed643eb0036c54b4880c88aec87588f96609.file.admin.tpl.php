<?php /* Smarty version Smarty-3.1.15, created on 2015-06-07 04:15:37
         compiled from "../../templates/admin/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1470588233554a147ac31004-62371265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2663ed643eb0036c54b4880c88aec87588f96609' => 
    array (
      0 => '../../templates/admin/admin.tpl',
      1 => 1433598192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1470588233554a147ac31004-62371265',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_554a147accb6a7_55272415',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554a147accb6a7_55272415')) {function content_554a147accb6a7_55272415($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- Custom CSS -->
<link href="../../assets/frameworks/sb-admin.css" rel="stylesheet">
<link href="../../css/admin.css" rel="stylesheet">
</head>
<body>

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
                </li>
                 
                    <li>
                        <a href="index.html"><i class="fa fa-cogs fa-fw"></i> Main panel</a>
                    </li>
                    
                    <li>
                        <a href="database.php"><i class="fa fa-database fa-fw"></i> Databases<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            
                            <li>
                                <a href="#"> Posts  </a>
                            </li>
                            <li>
                                <a href="#"> Users <span class="fa arrow"></span></a>
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
    </nav>

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
                                <div class="huge">26</div>
                                <div> User reports </div>
                            </div>
                        </div>
                    </div>
                    <a href="">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
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
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            
            
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
                                            <th>#</th>
                                            <th>UserID</th>
                                            <th>Date</th>
                                            <th>Type</th>
                                            <th>Description</th>
                                            <th>Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>3326</td>
                                            <td>1230459</td>
                                            <td>10/21/2013 3:29 PM</td>
                                            <td>Bug</td>
                                            <td>The site crashed when I tried to use the fridge</td>
                                            <td>Dismissed</td>

                                        </tr>
                                        <tr>
                                            <td>3325</td>
                                            <td>1230574</td>
                                            <td>9/21/2013 3:29 PM</td>
                                            <td>Report</td>
                                            <td>Someone posted a photo of mine without my permission </td>
                                            <td>Closed</td>
                                        </tr>
                                        <tr>
                                            <td>3324</td>
                                            <td>1230459</td>
                                            <td>10/21/2013 3:29 PM</td>
                                            <td>Bug</td>
                                            <td>Photos don't load automatically when my profile is updated</td>
                                            <td>Open</td>
                                        </tr>
                                        
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

    <div class="row">
        <div class="col-lg-12">
         <!-- /.panel -->
         <div class="panel panel-danger">
            <div class="panel-heading">
                <i class="fa fa-wrench fa-fw"></i> System report log
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
                                        <th>#</th>
                                        <th>UserID</th>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Description</th>
                                        <th>Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>3326</td>
                                        <td>1230459</td>
                                        <td>10/21/2013 3:29 PM</td>
                                        <td>Bug</td>
                                        <td>The site crashed when I tried to use the fridge</td>
                                        <td>Dismissed</td>

                                    </tr>
                                    <tr>
                                        <td>3325</td>
                                        <td>1230574</td>
                                        <td>9/21/2013 3:29 PM</td>
                                        <td>Report</td>
                                        <td>Someone posted a photo of mine without my permission </td>
                                        <td>Closed</td>
                                    </tr>
                                    <tr>
                                        <td>3324</td>
                                        <td>1230459</td>
                                        <td>10/21/2013 3:29 PM</td>
                                        <td>Bug</td>
                                        <td>Photos don't load automatically when my profile is updated</td>
                                        <td>Open</td>
                                    </tr>
                                    
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

</body>

<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
