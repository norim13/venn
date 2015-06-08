{include file="common/header.tpl"}
<!-- Custom CSS -->
<link href="../../assets/frameworks/sb-admin.css" rel="stylesheet">
<link href="../../css/admin.css" rel="stylesheet">

</head>
<body>

<div id="wrapper">

    {include file="common/navbar_admin.tpl"}
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
                                <div class="huge"> {sizeof($reports)}</div>
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
                                        {foreach $reports as $report}
                                            <tr>
                                            <td>
                                                <a href="{$BASE_URL}pages/posts/single_post.php?post_id={$report.post_id}">
                                                    View Post</a>
                                            </td>
                                            <td>
                                                {$report.username}
                                            </td>
                                            <td>
                                                {$report.text}
                                            </td>
                                            <td>
                                                <a href={$report.url}>{$report.url}</a>
                                            </td>
                                            <td>
                                                {$report.date}
                                            </td>
                                            <td>
                                                {$report.message}
                                            </td>
                                            {if $report.processed}
                                                <td>
                                                    Yes
                                                </td>
                                            {/if}
                                            {if !$report.processed}
                                                <td>
                                                    No
                                                </td>
                                            {/if}


                                            <td>
                                                <form id="form" action="../../actions/admin/process_report.php" method="post">
                                                    <input type="hidden" name="report_id" value="{$report.id}">
                                                    <input type="submit" value="Ignore Post" class="btn">
                                                </form>

                                            </td>
                                            <td>
                                                <form id="form" action="../../actions/admin/delete_post.php" method="post">
                                                    <input type="hidden" name="post_id" value={$report.post_id}>
                                                    <input type="submit" value="Delete Post" class="btn btn-danger">
                                                </form>

                                            </td>
                                            </tr>{/foreach}
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

{include file="common/footer.tpl"}