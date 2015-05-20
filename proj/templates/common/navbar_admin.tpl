{include file="common/header.tpl"}


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
    </nav>