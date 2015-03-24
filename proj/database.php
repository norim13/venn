<?php include 'pages/header.php'; ?>


    <!-- Custom CSS -->
    <link href="assets/frameworks/sb-admin.css" rel="stylesheet">
    <link href="assets/css/admin.css" rel="stylesheet"> 

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
                            <a href="admin.php"><i class="fa fa-cogs fa-fw"></i> Main panel</a>
                        </li>
                             
                        <li>
                            <a href="database.php"><i class="fa fa-database fa-fw"></i> Databases<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="#"> Users  </a>
                                </li>
                                <li>
                                    <a href="#"> Posts </a>
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
                                                    <th>#</th>
                                                    <th>UserID</th>
                                                    <th>Name</th>
                                                    <th>Registration</th>
                                                    <th>Gender</th>
                                                    <th>Warnings</th>
                                                    <th>Comments</th>
                                                    <th>Reposts</th>
                                                    <th>Upvotes</th>
                                                    <th>Downvotes</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>12</td>
                                                    <td>09123</td>
                                                    <td>Joaquim Nandes</td>
                                                    <td>19/5/2014</td>
                                                    <td>Male</td>
                                                    <td>4</td>
                                                    <td>123</td>
                                                    <td>46</td>
                                                    <td>976</td>
                                                    <td>1034</td>
                                                    <td><button class="btn btn-danger"><i class="fa fa-trash-o"> </i>  Delete</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>09123</td>
                                                    <td>Joaquim Nandes</td>
                                                    <td>19/5/2014</td>
                                                    <td>Male</td>
                                                    <td>4</td>
                                                    <td>123</td>
                                                    <td>46</td>
                                                    <td>976</td>
                                                    <td>1034</td>
                                                    <td><button class="btn btn-danger"><i class="fa fa-trash-o"> </i>  Delete</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                   <td>#</td>
                                                    <td>09123</td>
                                                    <td>Joaquim Nandes</td>
                                                    <td>19/5/2014</td>
                                                    <td>Male</td>
                                                    <td>4</td>
                                                    <td>123</td>
                                                    <td>46</td>
                                                    <td>976</td>
                                                    <td>1034</td>
                                                    <td><button class="btn btn-danger"><i class="fa fa-trash-o"> </i>  Delete</button>
                                                    </td>
                                                </tr>
                                            
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
                                                    <th>#</th>
                                                    <th>UserID</th>
                                                    <th>Name</th>
                                                    <th>Registration</th>
                                                    <th>Gender</th>
                                                    <th>Warnings</th>
                                                    <th>Comments</th>
                                                    <th>Reposts</th>
                                                    <th>Upvotes</th>
                                                    <th>Downvotes</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>12</td>
                                                    <td>09123</td>
                                                    <td>Joaquim Nandes</td>
                                                    <td>19/5/2014</td>
                                                    <td>Male</td>
                                                    <td>4</td>
                                                    <td>123</td>
                                                    <td>46</td>
                                                    <td>976</td>
                                                    <td>1034</td>
                                                    <td><button class="btn btn-danger"><i class="fa fa-trash-o"> </i>  Delete</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>09123</td>
                                                    <td>Joaquim Nandes</td>
                                                    <td>19/5/2014</td>
                                                    <td>Male</td>
                                                    <td>4</td>
                                                    <td>123</td>
                                                    <td>46</td>
                                                    <td>976</td>
                                                    <td>1034</td>
                                                    <td><button class="btn btn-danger"><i class="fa fa-trash-o"> </i>  Delete</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                   <td>#</td>
                                                    <td>09123</td>
                                                    <td>Joaquim Nandes</td>
                                                    <td>19/5/2014</td>
                                                    <td>Male</td>
                                                    <td>4</td>
                                                    <td>123</td>
                                                    <td>46</td>
                                                    <td>976</td>
                                                    <td>1034</td>
                                                    <td><button class="btn btn-danger"><i class="fa fa-trash-o"> </i>  Delete</button>
                                                    </td>
                                                </tr>
                                             
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
